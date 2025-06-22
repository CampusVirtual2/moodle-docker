<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'campusvirtual2.com_db';
$CFG->dbname    = 'moodle_db';
$CFG->dbuser    = 'moodle_user';
$CFG->dbpass    = 'senha_banco_dados2025';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'https://campusvirtual2.com';
$CFG->dataroot  = '/var/www/html/moodledata';
$CFG->admin     = 'admin';
// INFORME AO MOODLE QUE ELE ESTÁ ATRÁS DE UM PROXY REVERSO
#$CFG->reverseproxy = true;
#$CFG->localcachedir = '/var/www/moodledata/localcache';
#$CFG->proxies = array(
#    '173.245.48.0/20',
#    '103.21.244.0/22',
#    '103.22.200.0/22',
#    '103.31.4.0/22',
#    '141.101.64.0/18',
#    '108.162.192.0/18',
#    '190.93.240.0/20',
#    '188.114.96.0/20',
#    '197.234.240.0/22',
#    '198.41.128.0/17',
#    '162.158.0.0/15',
#    '104.16.0.0/13',
#    '104.24.0.0/14',
#    '172.64.0.0/13',
 #   '131.0.72.0/22',
 #   '2400:cb00::/32',
 ##   '2606:4700::/32',
 #   '2803:f800::/32',
 #   '2405:b500::/32',
 #   '2405:8100::/32',
 #   '2a06:98c0::/29',
 #   '2c0f:f248::/32',
 #   'nginx-proxy-manager'
#);
$CFG->directorypermissions = 0777;

// **MUITO IMPORTANTE:** Esta linha força o Moodle a considerar a conexão como HTTPS
// se o cabeçalho X-Forwarded-Proto (enviado pelo Cloudflare/NPM) indicar 'https'.
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
