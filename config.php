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

$CFG->wwwroot   = 'https://campusvirtual2.com';
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

//debug - development
@error_reporting(E_ALL | E_STRICT);   // NOT FOR PRODUCTION SERVERS!
@ini_set('display_errors', '1');         // NOT FOR PRODUCTION SERVERS!
//$CFG->debug = (E_ALL | E_STRICT);   // === DEBUG_DEVELOPER - NOT FOR PRODUCTION$
//$CFG->debugdisplay = 1;              // NOT FOR PRODUCTION SERVERS!
 
$CFG->mod_hvp_dev = 1;
$CFG->mod_hvp_aggregate_assets = 1;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
