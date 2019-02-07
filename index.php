<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'config.php';

require_once './views/header.php';
?>

<ul>
    <li><a href="user.php"><?php echo $languages->get('USER_LINK'); ?></a></li>
</ul>

<?php
require_once './views/footer.php';
