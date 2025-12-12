#!/bin/bash
set -euo pipefail
trap 'echo "[ERRO] Ocorreu um problema durante o backup." >&2' ERR

############################################
#        CONFIGURAÇÕES E VARIÁVEIS
############################################

export POSTGRES_HOST="10.100.200.4"
export POSTGRES_USER="moodle_agu"
export POSTGRES_PASSWORD="5xE&LNr39ls^"
export POSTGRES_DB="moodle_agu"

export AWS_ACCESS_KEY_ID="LPOLDVFGXP0PSO8L63R2"
export AWS_SECRET_ACCESS_KEY="96dVKhBIoycL50HXjIPg8DeYTTz2Ii68RtsttdNI"
export AWS_REGION="us-east-1"
export AWS_BUCKET_NAME="bkp-unbmds"
export AWS_BUCKET_PATH="moodle/backups"
export AWS_ENDPOINT_URL="https://s3.us-east-1.wasabisys.com"

DATE=$(date +'%Y-%m-%d_%H-%M')
BACKUP_DIR="/backup/moodle/$DATE"

mkdir -p "$BACKUP_DIR"

############################################
#                FUNÇÕES
############################################
log() { echo "[INFO] $1"; }
err() { echo "[ERRO] $1" >&2; exit 1; }

############################################
#               BACKUP MOODLE
############################################

log "Compactando diretório do Moodle (sem exclusões)..."

MOODLE_FILE="$BACKUP_DIR/moodle-$DATE.tar.gz"

tar -czf "$MOODLE_FILE" /var/www/html \
    || err "Falha ao compactar o diretório do Moodle."

############################################
#            BACKUP MOODLEDATA
############################################

log "Compactando moodledata (excluindo caches)..."

MOODLEDATA_FILE="$BACKUP_DIR/moodledata-$DATE.tar.gz"

tar -czf "$MOODLEDATA_FILE" \
    --exclude='/var/www/moodledata/cache' \
    --exclude='/var/www/moodledata/localcache' \
    --exclude='/var/www/moodledata/sessions' \
    /var/www/moodledata \
    || err "Falha ao compactar o diretório moodledata."

############################################
#            BACKUP DO BANCO
############################################

log "Gerando backup do banco PostgreSQL..."

DB_FILE="$BACKUP_DIR/moodle-db-$DATE.dump.gz"

PGPASSWORD="$POSTGRES_PASSWORD" \
pg_dump -h "$POSTGRES_HOST" -U "$POSTGRES_USER" -Fc "$POSTGRES_DB" \
    | gzip > "$DB_FILE" \
    || err "Falha ao gerar backup do banco."

############################################
#         ENVIO PARA WASABI S3
############################################

log "Enviando moodle.tar.gz..."

aws s3 cp "$MOODLE_FILE" \
    "s3://$AWS_BUCKET_NAME/$AWS_BUCKET_PATH/moodle-$DATE.tar.gz" \
    --region "$AWS_REGION" \
    --endpoint-url "$AWS_ENDPOINT_URL" \
    || err "Falha ao enviar o backup do Moodle."

log "Enviando moodledata.tar.gz..."

aws s3 cp "$MOODLEDATA_FILE" \
    "s3://$AWS_BUCKET_NAME/$AWS_BUCKET_PATH/moodledata-$DATE.tar.gz" \
    --region "$AWS_REGION" \
    --endpoint-url "$AWS_ENDPOINT_URL" \
    || err "Falha ao enviar o backup do MoodleData."

log "Enviando backup do banco..."

aws s3 cp "$DB_FILE" \
    "s3://$AWS_BUCKET_NAME/$AWS_BUCKET_PATH/moodle-db-$DATE.dump.gz" \
    --region "$AWS_REGION" \
    --endpoint-url "$AWS_ENDPOINT_URL" \
    || err "Falha ao enviar o backup do banco."

log "Todos arquivos foram enviados com sucesso!"

############################################
#               LIMPEZA
############################################

rm -rf "$BACKUP_DIR"

log "Backup finalizado e arquivos temporários removidos."

