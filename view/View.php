<?php
  include_once 'libs/Smarty.class.php';

  class View
  {
    protected $smarty;

    function __construct()
    {
      $this->smarty = new smarty();
      $this->smarty->assign('titulo', 'Business Administration');
    }

    public function showLayout(){
      $this->smarty->display('index.tpl');
    }
  }
?>