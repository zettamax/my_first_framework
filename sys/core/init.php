<?

include SITE_PATH . DS . 'sys'.DS.'core'.DS.'autoload.php';
Autoload::register();

$smarty_dir = SITE_PATH . DS . 'smarty' . DS . 'libs' . DS;
define('SMARTY_DIR', $smarty_dir);
include_once(SMARTY_DIR . 'Smarty.my.php');

?>