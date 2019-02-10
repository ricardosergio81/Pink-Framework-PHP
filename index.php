<?php

try {
  $conn = new PDO('mysql:host=127.0.0.1;dbname=mysql', 'root', '12345');
   # $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}







exit;



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<pre>';
/**
 *  Define base url 
 */
$pref = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http") . "://";
$base_url = $pref . $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);

/**
 * Configuration for languages
 *
 */
$language = "pt_br";


define('BASEDIR', str_replace('index.php', '', __FILE__));

/**
 * Include core of framework
 */
include_once BASEDIR . '/sys/pink.php';

