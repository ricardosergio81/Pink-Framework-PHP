<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'config.php';
include_once './helpers/db_mysql_pdo.php';

require_once './views/header.php';

$obj_db_mysql_pdo = new db_mysql_pdo($db_config);
var_dump($obj_db_mysql_pdo->query('show variables'));
?>

<ul>
    <li><a href="user.php"><?php echo $languages->get('USER_LINK'); ?></a></li>
</ul>

<?php
require_once './views/footer.php';
