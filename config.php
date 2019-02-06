<?php
/**
 * Configuration for database 
 *
 */
$host       = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );

/**
* Configuration for languages
*
*/
$language = "pt_br";