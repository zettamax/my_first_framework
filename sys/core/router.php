<?

Class Router {

    private $controller;
    private $action;
    private $params;

    private function get_controller()
    {
	$route = $_GET['q'];
	$params = explode('/', $route);
	$params_num = count($params);
	if ($params_num > 0)
	{
	    $this->controller = array_shift($params);
	}
	if ($params_num > 1)
	{
	    $this->action = array_shift($params);
	}
	$this->params = $params;
	if (empty($this->controller))
	    $this->controller = 'index';
	if (empty($this->action))
	    $this->action = 'index';
    }

    private function start_controller()
    {
	$controller_name = 'Controller_' . $this->controller;
	$action_name = 'action_' . $this->action;
	$controller = new $controller_name;
	$controller->$action_name();
    }

    public function delegate()
    {
	$this->get_controller();
	$this->start_controller();
    }

}
?>
