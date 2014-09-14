<?php

require('Smarty.class.php');

class Smarty_PhoneBook extends Smarty {

   function Smarty_PhoneBook()
   {
        $this->Smarty();

        $this->template_dir = SITE_PATH . DS . 'app' . DS . 'view' . DS . 'templates' . DS;
        $this->compile_dir  = SITE_PATH . DS . 'app' . DS . 'view' . DS . 'templates' . DS . 'compile' . DS;
        $this->config_dir   = SITE_PATH . DS . 'app' . DS . 'view' . DS . 'templates' . DS . 'config' . DS;
        $this->cache_dir    = SITE_PATH . DS . 'app' . DS . 'view' . DS . 'templates' . DS . 'cache' . DS;

        $this->caching = false;
	$this->cache_modified_check = true;
   }

}
?>