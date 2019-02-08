<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


define('BASEDIR', str_replace('index.php', '', __FILE__));

include_once BASEDIR . 'config.php';

include_once BASEDIR . '/sys/pink.php';

