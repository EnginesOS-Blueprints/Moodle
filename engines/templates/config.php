<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '_ENGINES_dbhost';
$CFG->dbname    = '_ENGINES_dbname';
$CFG->dbuser    = '_ENGINES_dbuser';
$CFG->dbpass    = '_ENGINES_dbpass';
$CFG->prefix    = '';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://_ENGINES_fqdn';
$CFG->dataroot  = '_ENGINES_VOLDIR';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
