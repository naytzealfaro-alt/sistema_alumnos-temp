<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| SAES database connection.
| Defaults target a typical local XAMPP setup. If your MySQL credentials differ,
| set the SAES_DB_* environment variables or edit the fallback values locally.
*/
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'      => '',
    'hostname' => getenv('SAES_DB_HOST') ?: 'localhost',
    'username' => getenv('SAES_DB_USER') ?: 'root',
    'password' => getenv('SAES_DB_PASSWORD') !== FALSE ? getenv('SAES_DB_PASSWORD') : '',
    'database' => getenv('SAES_DB_NAME') ?: 'saes',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt'  => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
