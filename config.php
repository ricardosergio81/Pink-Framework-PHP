<?php

/**
 * Configuration for database 
 *
 */
$db_config['hostname'] = 'localhost';
$db_config['username'] = 'root';
$db_config['password'] = '';
$db_config['database'] = 'mysql';

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


