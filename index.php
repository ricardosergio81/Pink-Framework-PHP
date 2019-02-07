<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'config.php';
include_once './helpers/db_mysql_pdo.php';



#$obj_db_mysql_pdo = new db_mysql_pdo($db_config);
#var_dump($obj_db_mysql_pdo->query('show variables'));

$requestUrl = $pref . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$requestString = substr($requestUrl, strlen($base_url));

$urlParams = explode('/', $requestString);

$controller = strtolower(array_shift($urlParams));

$action = strtolower(array_shift($urlParams));
$action = $action != "" ? $action : 'index';

if (!file_exists('controllers/' . $controller . '.php')) {
    echo $languages->get('ERROR_CONTROLLER_DOES_NOT_EXIST');
} else {
    include 'controllers/' . $controller . '.php';
    $controller = new $controller();

    if (!method_exists($controller, $action)) {
        echo $languages->get('ERROR_CONTROLLER_ACTION_DOES_NOT_EXIST');
    } else {
        $controller->$action();
    }
}

exit;

require_once './views/header.php';
?>

<ul>
    <li><a href="user.php"><?php echo $languages->get('USER_LINK'); ?></a></li>
</ul>

<?php
require_once './views/footer.php';
