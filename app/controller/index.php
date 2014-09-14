<?

Class Controller_Index {

    public function action_index()
    {
	$model = Model::factory('model_db');
	$people = $model->get_subscribers();
	unset($people[count($people)-1]);
//	$view = View::factory();
//	$view->set_file('template_index');
//	$view->set_vars($people);
//	$view->render();
	$smarty = new Smarty_PhoneBook;
//	var_dump($smarty);
	$smarty->assign('content', $people);
	$smarty->display('index.tpl');
    }

    public function action_add()
    {
	if (isset($_POST['submit']))
	{
	    $data['name'] = $_POST['name'];
	    $data['surname'] = $_POST['surname'];
	    $data['telephone'] = $_POST['telephone'];
	    $data['address'] = $_POST['address'];
	    $model = Model::factory('model_db');
	    $model->add_subscriber($data);
	    header('Location: http://test/');
	}
	else
	{
//	    $view = View::factory();
//	    $view->set_file('template_add');
//	    $view->render();
	    $smarty = new Smarty_PhoneBook;
	    $smarty->display('add.tpl');
	}
    }

    public function action_delete()
    {
	if (isset($_POST['submit']))
	{
	    $id = $_POST['id'];
	    $model = Model::factory('model_db');
	    $model->delete_subscriber($id);
	    header('Location: http://test/');
	}
	else
	{
	    $id = $_GET['id'];
	    $model = Model::factory('model_db');
	    $subscriber = $model->get_subscriber($id);
//	    $view = View::factory();
//	    $view->set_file('template_delete');
//	    $view->set_vars($subscriber);
//	    $view->render();
	    $smarty = new Smarty_PhoneBook;
	    $smarty->assign('content', $subscriber);
	    $smarty->display('delete.tpl');
	}
    }

}

?>
