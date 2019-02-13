<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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

/**
 * Set default page
 */
$defaultpage = "helloworld";

define('BASEDIR', str_replace('index.php', '', __FILE__));

/**
 * Include core of framework
 */
include_once BASEDIR . '/sys/pink.php';

