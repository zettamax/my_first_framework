<?

abstract class Model {

    protected $link;

    public static function factory($name)
    {
	return new $name;
    }

    public function __construct()
    {
	$link = mysqli_connect('localhost', 'root', '');
	$this->link = $link;
	if (!mysqli_select_db($this->link, 'illicha'))
	{
	    mysqli_query($this->link, 'CREATE DATABASE IF NOT EXISTS `illicha`');
	}
	mysqli_select_db($this->link, 'illicha');
	mysqli_query($this->link, 'CREATE TABLE IF NOT EXISTS `telephone_book` (
	    `id` int(11) NOT NULL AUTO_INCREMENT,
	    `name` text NOT NULL,
	    `surname` text NOT NULL,
	    `telephone` text NOT NULL,
	    `address` text NOT NULL,
	    PRIMARY KEY (`id`)
	    ) ENGINE=InnoDB  DEFAULT CHARSET=ascii;');
    }

    public function __destruct()
    {
	mysqli_close($this->link);
    }

}

?>
