<?

class View {

    private $file;
    private $vars;

    public static function factory()
    {
	return new View;
    }

    public function set_vars($vars)
    {
	$this->vars = $vars;
    }

    public function set_file($file)
    {
	$file_path = Utils::find_view($file);
	$this->file = $file_path;
    }

    public function render()
    {
	if (isset($this->vars))
	{
	    foreach ($this->vars as $key => $value)
	    {
		$content[$key] = $value;
	    }
	}
	include $this->file;
    }

}

?>
