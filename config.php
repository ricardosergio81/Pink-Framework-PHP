<?php

/**
 * Configuration for database 
 *
 */
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "test";

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


