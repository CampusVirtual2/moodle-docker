<?php
define('CLI_SCRIPT', true);

require_once(__DIR__ . '/config.php');
require_once($CFG->libdir . '/adminlib.php');

echo "=== Diagnóstico de Performance do Moodle ===\n\n";

// PHP Info
echo "[PHP] Versão: " . PHP_VERSION . "\n";
echo "[PHP] Memória Máxima: " . ini_get('memory_limit') . "\n";
echo "[PHP] Max Execução: " . ini_get('max_execution_time') . "s\n";

// Moodle Info
echo "[Moodle] Versão: {$CFG->release}\n";
echo "[Moodle] Debug: " . ($CFG->debugdisplay ? 'ATIVADO' : 'DESATIVADO') . "\n";

// OpCache
if (function_exists('opcache_get_status')) {
    $opcache = opcache_get_status();
    if ($opcache && $opcache['opcache_enabled']) {
        echo "[OpCache] Ativado ✅\n";
        echo "  - Usado: {$opcache['memory_usage']['used_memory']} bytes\n";
        echo "  - Livre: {$opcache['memory_usage']['free_memory']} bytes\n";
    } else {
        echo "[OpCache] Desativado ❌\n";
    }
} else {
    echo "[OpCache] Não instalado ❌\n";
}

// Redis
if (isset($CFG->session_handler_class) && strpos($CFG->session_handler_class, 'redis') !== false) {
    echo "[Redis] Sessão via Redis ✅\n";
} else {
    echo "[Redis] Sessão via Redis ❌\n";
}

// Sessões
echo "[Sessão] Handler: " . ($CFG->session_handler_class ?? 'PHP default') . "\n";

// CRON
$cron_last_run = $DB->get_field_sql("SELECT MAX(timestart) 
    FROM {task_log}
    WHERE timestart IS NOT NULL");
$tempo_passado = time() - $cron_last_run;
echo "[CRON] Última execução: " . format_time($tempo_passado) . " atrás\n";
if ($tempo_passado > 3600) {
    echo "  ⚠️ CRON atrasado! Deve rodar a cada minuto\n";
}

// MUC (Cache)
$cache_config = cache_config::instance();
$stores = $cache_config->get_all_stores();
echo "[Cache] Tipos configurados: " . implode(', ', array_keys($stores)) . "\n";

// TTLs
echo "[TTL] Cache cURL: " . get_config('core', 'curlcache') . " segundos\n";

echo "\n=== Fim do diagnóstico ===\n";
?>

