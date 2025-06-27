<?php
require __DIR__ . '/vendor/autoload.php';

// Defina o diretório de cache para os arquivos gerados pelo AOP
define('Pinpoint\\Common\\AOP_CACHE_DIR', __DIR__ . '/aop_cache');

// Inclui o autoloader gerado automaticamente pelo pinpoint
require __DIR__ . '/vendor/pinpoint-apm/pinpoint-php-aop/auto_pinpointed.php';

// Carrega o Moodle normalmente
require __DIR__ . '/index.php';

