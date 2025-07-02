#!/bin/bash
set -e

# Carrega manualmente variáveis do .env se necessário
[ -f /backup/.env ] && export $(grep -v '^#' /backup/.env | xargs)

DATE=$(date +'%Y-%m-%d_%H-%M')
BACKUP_DIR="/backup/moodle/$DATE"
mkdir -p "$BACKUP_DIR"

echo "[INFO] Backup do código Moodle..."
tar -czf "$BACKUP_DIR/moodle.tar.gz" /var/www/html/moodle

echo "[INFO] Backup do moodledata..."
tar -czf "$BACKUP_DIR/moodledata.tar.gz" /var/www/moodledata

echo "[INFO] Backup do banco PostgreSQL..."
PGPASSWORD="$POSTGRES_PASSWORD" pg_dump -h "$POSTGRES_HOST" -U "$POSTGRES_USER" "$POSTGRES_DB" > "$BACKUP_DIR/db.sql"

FINAL_ARCHIVE="/backup/moodle/moodle-backup-$DATE.tar.gz"
tar -czf "$FINAL_ARCHIVE" -C "$BACKUP_DIR" .

S3_PATH="s3://$AWS_BUCKET_NAME/$AWS_BUCKET_PATH/moodle-backup-$DATE.tar.gz"
echo "[INFO] Enviando backup para S3 Wasabi: $S3_PATH"
aws s3 cp "$FINAL_ARCHIVE" "$S3_PATH" --region "$AWS_REGION" --endpoint-url https://s3.us-east-1.wasabisys.com

rm -rf "$BACKUP_DIR"
rm -f "$FINAL_ARCHIVE"

echo "[INFO] Backup enviado com sucesso!"

