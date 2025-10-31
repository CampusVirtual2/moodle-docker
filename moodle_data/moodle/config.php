<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'moodlepgdb'; //'172.16.28.251';
$CFG->dbname    = 'moodle_agu';
$CFG->dbuser    = 'moodle_agu'; //'moodle_agu';
$CFG->dbpass    = '5xE&LNr39ls^';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 5432,
  'dbsocket' => '',
);

$CFG->wwwroot   = 'https://www.campusvirtual.unb.br';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';
$CFG->sslproxy  = 1;

$CFG->lang      = 'pt_br';

$CFG->directorypermissions = 0777;

// **MUITO IMPORTANTE:** Esta linha força o Moodle a considerar a conexão como HTTPS
// se o cabeçalho X-Forwarded-Proto (enviado pelo Cloudflare/NPM) indicar 'https'.
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

//
// 🚀 Tuning de desempenho com cache em memória (RAM)
//
#$CFG->localcachedir = '/dev/shm/moodlecache';   // cache local mais rápido
$CFG->localcachedir = '/var/www/moodledata/cache';   // cache local mais rápido
#$CFG->tempdir       = '/dev/shm/moodletemp';    // arquivos temporários em memória
$CFG->tempdir       = '/var/www/html/moodle/temp';    // arquivos temporários em memória


// Sessões no Redis (ótimo para ambientes com múltiplos containers)
$CFG->session_handler_class = '\core\session\redis';
$CFG->session_redis_host = 'redis';  // nome do container Redis
$CFG->session_redis_port = 6379;
$CFG->session_redis_database = 0;  // Pode usar de 0 a 15
$CFG->session_redis_prefix = 'sess_';
$CFG->session_redis_acquire_lock_timeout = 120;
$CFG->session_redis_lock_expire = 7200;
$CFG->session_redis_lock_retry = 100;

$CFG->sessiontimeout = 7200; // 2 horas

// ⚡️ Usa APCu para armazenar sessões e configurações
//$CFG->session_handler_class = '\core\session\apcu_session'; // armazena sessões no APCu (ótimo para 1 container PHP)
$CFG->rcache = true;
$CFG->rcachetype = 'apcu';

//debug - development
@error_reporting(E_ALL | E_STRICT);   // NOT FOR PRODUCTION SERVERS!
@ini_set('display_errors', '1');         // NOT FOR PRODUCTION SERVERS!
//$CFG->debug = (E_ALL | E_STRICT);   // === DEBUG_DEVELOPER - NOT FOR PRODUCTION$
//$CFG->debugdisplay = 1;              // NOT FOR PRODUCTION SERVERS!
 
$CFG->mod_hvp_dev = 1;
$CFG->mod_hvp_aggregate_assets = 1;
$CFG->smtpmaxbulk = 5;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
//@error_reporting(E_ALL | E_STRICT);
//@ini_set('display_errors', '1');
//$CFG->debug = (E_ALL | E_STRICT);
//$CFG->debugdisplay = 1;
