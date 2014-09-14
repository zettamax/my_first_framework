<?

class Utils {

    static function find_view($name)
    {
	return dirname(__FILE__) . DS . '..' . DS . '..' . DS . 'app' . DS . 'view' . DS . $name . '.php';
	
    }

}

?>