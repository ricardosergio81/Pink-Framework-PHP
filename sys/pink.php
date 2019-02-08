<?php

require_once 'sys/common.php';

require_once 'sys/lang.php';
loadClasses('lang');

require_once 'sys/core.php';

function &get_instance() {
    return Core::get_instance();
}

require_once 'sys/database.php';
