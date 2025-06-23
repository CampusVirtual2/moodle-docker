<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'moodlepgdb';
$CFG->dbname    = 'moodle_pg_db';
$CFG->dbuser    = 'moodle_pg_user';
$CFG->dbpass    = 'senha_postgres_2025';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 5432,
  'dbsocket' => '',
);

$CFG->wwwroot   = 'https://campusvirtual2.com';
$CFG->dataroot  = '/var/www/html/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

// **MUITO IMPORTANTE:** Esta linha força o Moodle a considerar a conexão como HTTPS
// se o cabeçalho X-Forwarded-Proto (enviado pelo Cloudflare/NPM) indicar 'https'.
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
