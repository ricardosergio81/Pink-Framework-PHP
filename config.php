<?php

/**
 * Configuration for database 
 *
 */
$db_config['hostname'] = 'localhost';
$db_config['username'] = 'root';
$db_config['password'] = '';
$db_config['database'] = 'mysql';

$pref = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http") . "://";
$base_url = $pref . $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);

/**
 * Configuration for languages
 *
 */
$language = "pt_br";


/**
 * Auto load
 */
require_once 'helpers/languages.php';
$languages = new Languages($language);


