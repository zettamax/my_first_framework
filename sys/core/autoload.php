<?

Class Autoload {

    public static function register()
    {
	if (!spl_autoload_register('self::load'))
	{
	    echo 'can`t register autoload function';
	}
    }

    public static function unregister()
    {
	if (!spl_autoload_unregister('self::load'))
	{
	    echo 'can`t unregister autoload function';
	}
    }

    public static function load($class)
    {
	$autoload_dirs = array(SITE_PATH . DS . 'app' . DS, SITE_PATH . DS . 'sys' . DS, SITE_PATH . DS . 'sys' . DS . 'core' . DS); //dirs: /app, /sys, /sys/core
	$loaded = 0;
	for ($i = 0; $i < 3; $i++)
	{
	    $class_file = $autoload_dirs[$i] . self::get_file_by_class($class) . '.php';
	    if (file_exists($class_file))
	    {
		include $class_file;
		$loaded = 1;
		break;
	    }
	}
	if (!$loaded) die('Coudn`t load <b>' . $class_file . '</b>');
    }

    private function get_file_by_class($class_name)
    {
	return str_replace('_', DS, strtolower($class_name));
    }

}