#!/bin/bash

# Nome do serviço Redis no docker-compose
SERVICE_NAME=redis

# Caminho do docker-compose (ajuste se estiver fora da raiz)
COMPOSE_FILE=docker-compose.yml

echo "🔧 Verificando status de vm.overcommit_memory..."

CURRENT_VALUE=$(sysctl -n vm.overcommit_memory)

if [ "$CURRENT_VALUE" -eq 1 ]; then
    echo "✅ vm.overcommit_memory já está ativo."
else
    echo "⚠️ vm.overcommit_memory está em $CURRENT_VALUE. Aplicando correção..."
    echo "vm.overcommit_memory = 1" | sudo tee -a /etc/sysctl.conf
    sudo sysctl -w vm.overcommit_memory=1
fi

echo ""
echo "🔁 Reiniciando o container Redis com Docker Compose..."
docker-compose -f $COMPOSE_FILE restart $SERVICE_NAME

echo ""
echo "🔍 Verificando logs do Redis..."
sleep 3
REDIS_CONTAINER=$(docker-compose -f $COMPOSE_FILE ps -q $SERVICE_NAME)

docker logs "$REDIS_CONTAINER" 2>&1 | grep -q "Memory overcommit must be enabled"

if [ $? -eq 0 ]; then
    echo "❌ Alerta ainda presente nos logs do Redis."
    exit 1
else
    echo "✅ Redis iniciado corretamente, sem alerta de overcommit."
fi

echo "📦 Script finalizado com sucesso!"

