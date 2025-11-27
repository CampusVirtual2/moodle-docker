<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '10.100.200.4';
#$CFG->dbport    = '6432';
$CFG->dbname    = 'moodle_agu';
$CFG->dbuser    = 'moodle_agu';
$CFG->dbpass    = '5xE&LNr39ls^';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array(
    'dbpersist' => 0,
    'dbtimeout' => 20,
    'dbport' 	=> 6432,
    'dbsocket' => false,
    'dbhandlesoptions' => false,
    'dbcollation' => 'utf8mb4'
);

$CFG->wwwroot   = 'https://www.campusvirtual2.com';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';
$CFG->reverseproxy = false;
$CFG->sslproxy  = true;

$CFG->lang      = 'pt_br';

$CFG->directorypermissions = 0777;

$CFG->themedesignermode = 0;
$CFG->cachejs = 1;

$CFG->session_handler_class = '\core\session\redis';
$CFG->session_redis_host = '10.100.200.4';
$CFG->session_redis_port = 6379;
$CFG->session_redis_database = 0;
$CFG->session_redis_prefix = 'sess_';
$CFG->session_redis_acquire_lock_timeout = 120;
$CFG->session_redis_lock_expire = 7200;
$CFG->session_redis_lock_retry = 100;

$CFG->cachestore_redis_server = '10.100.200.4';
$CFG->cachestore_redis_port = 6379;
$CFG->cachestore_redis_prefix = 'muc_';
$CFG->cachestore_redis_database = 1;

$CFG->sessiontimeout = 7200;

$CFG->rcache = true;
$CFG->rcachetype = 'apcu';

//debug - development
#@error_reporting(E_ALL | E_STRICT);   // NOT FOR PRODUCTION SERVERS!
#@ini_set('display_errors', '1');         // NOT FOR PRODUCTION SERVERS!
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

// Permite que o Moodle use o IP do cabeçalho X-Real-IP.
#if (!empty($_SERVER['HTTP_X_REAL_IP']) && filter_var($_SERVER['HTTP_X_REAL_IP'], FILTER_VALIDATE_IP)) {
#    $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_X_REAL_IP'];
#} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
#    $forwardedIps = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
#    $clientIp = trim(reset($forwardedIps));
#    if (filter_var($clientIp, FILTER_VALIDATE_IP)) {
#        $_SERVER['REMOTE_ADDR'] = $clientIp;
#    }
#}

