#!/bin/bash
set -e
trap 'echo "[ERRO] Ocorreu um problema durante o backup." >&2' ERR

# PostgreSQL (novo para o Moodle)
export POSTGRES_USER=moodle_agu
export POSTGRES_PASSWORD="5xE&LNr39ls^"
export POSTGRES_DB=moodle_agu
export AWS_ACCESS_KEY_ID=LPOLDVFGXP0PSO8L63R2
export AWS_SECRET_ACCESS_KEY=96dVKhBIoycL50HXjIPg8DeYTTz2Ii68RtsttdNI
export AWS_REGION=us-east-1
export AWS_BUCKET_NAME=bkp-unbmds
export AWS_BUCKET_PATH=moodle/backups


DATE=$(date +'%Y-%m-%d_%H-%M')
BACKUP_DIR="/backup/moodle/$DATE"
mkdir -p "$BACKUP_DIR"

echo "[INFO] Backup do código Moodle..."
tar -czf "$BACKUP_DIR/moodle.tar.gz" /var/www/html/moodle

echo "[INFO] Backup do moodledata..."
tar -czf "$BACKUP_DIR/moodledata.tar.gz" /var/www/moodledata

echo "[INFO] Backup do banco PostgreSQL..."
PGPASSWORD="${POSTGRES_PASSWORD}" pg_dump -h "${POSTGRES_HOST}" -U "${POSTGRES_USER}" "${POSTGRES_DB}" > "${BACKUP_DIR}/db.sql"

FINAL_ARCHIVE="/backup/moodle/moodle-backup-$DATE.tar.gz"
tar -czf "$FINAL_ARCHIVE" -C "$BACKUP_DIR" .

S3_PATH="s3://$AWS_BUCKET_NAME/$AWS_BUCKET_PATH/moodle-backup-$DATE.tar.gz"
echo "[INFO] Enviando backup para S3 Wasabi: $S3_PATH"
aws s3 cp "$FINAL_ARCHIVE" "$S3_PATH" --region "$AWS_REGION" --endpoint-url https://s3.us-east-1.wasabisys.com

# ✅ Checagem do resultado do envio para o S3
if [ $? -eq 0 ]; then
    echo "[INFO] Envio para S3 concluído com sucesso."
else
    echo "[ERRO] Falha ao enviar para S3." >&2
    exit 1
fi

rm -rf "$BACKUP_DIR"
rm -f "$FINAL_ARCHIVE"

echo "[INFO] Backup enviado com sucesso!"
