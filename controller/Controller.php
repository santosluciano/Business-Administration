<?php

  define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');

  require_once 'view/View.php';
  require_once 'controller/CompanyController.php';
  require_once 'controller/EmployeeTypeSpecialtyController.php';
  require_once 'controller/EmployeeTypeController.php';
  require_once 'controller/EmployeeController.php';


  class Controller
  {
    protected $view;
    protected $model;

    function __construct() {

    }

    public function layout(){
      $this->view = new View();
      $this->view->showLayout();
    }

  }

?>