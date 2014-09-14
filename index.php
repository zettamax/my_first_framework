<?

define('DS', DIRECTORY_SEPARATOR);
define('SITE_PATH', dirname(__FILE__));
include 'sys'.DS.'core'.DS.'init.php';

$router = new Router;
$router->delegate();

?>