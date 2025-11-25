#!/bin/bash

# Configurações
PGHOST="172.16.28.204"
PGPORT="6432"
PGUSER="pgbouncer"
PGDATABASE="pgbouncer"

# Prompt de senha (ou configure via PGPASSWORD env var)
echo "Digite a senha do usuário PgBouncer:"
read -s PGPASSWORD
export PGPASSWORD

# Timestamp
echo "===== PgBouncer Monitoring - $(date) ====="

# Testar conexão
if ! psql -h "$PGHOST" -p "$PGPORT" -U "$PGUSER" -d "$PGDATABASE" -c "SHOW VERSION;" >/dev/null 2>&1; then
  echo "❌ Falha ao conectar ao PgBouncer em $PGHOST:$PGPORT"
  exit 1
fi

# Mostrar status dos pools
echo -e "\n📌 POOLS:"
psql -h "$PGHOST" -p "$PGPORT" -U "$PGUSER" -d "$PGDATABASE" -c "SHOW POOLS;"

# Mostrar clientes conectados
echo -e "\n👥 CLIENTS:"
psql -h "$PGHOST" -p "$PGPORT" -U "$PGUSER" -d "$PGDATABASE" -c "SHOW CLIENTS;"

# Mostrar servidores backend
echo -e "\n🖥 SERVERS:"
psql -h "$PGHOST" -p "$PGPORT" -U "$PGUSER" -d "$PGDATABASE" -c "SHOW SERVERS;"

# Mostrar estatísticas
echo -e "\n📊 STATS:"
psql -h "$PGHOST" -p "$PGPORT" -U "$PGUSER" -d "$PGDATABASE" -c "SHOW STATS;"

# Mostrar lista de bancos
echo -e "\n📚 DATABASES:"
psql -h "$PGHOST" -p "$PGPORT" -U "$PGUSER" -d "$PGDATABASE" -c "SHOW DATABASES;"

# Limpar variável de senha
unset PGPASSWORD

echo -e "\n✅ Monitoramento concluído."

