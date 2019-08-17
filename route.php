<?php
  define('ACTION', 0);
  define('PARAMS', 1);

  require_once __DIR__ . '/class/EmployeeType.php';
  require_once __DIR__ . '/class/EmployeeSpecialty.php';
  require_once __DIR__ . '/class/Employee.php';
  require_once __DIR__ . '/class/Developer.php';
  require_once __DIR__ . '/class/Designer.php';
  require_once __DIR__ . '/class/Company.php';
  require_once __DIR__ . '/config/Router.php';
  require_once __DIR__ . '/model/Model.php';
  require_once __DIR__ . '/view/View.php';
  require_once __DIR__ . '/controller/Controller.php';

  $router = new Router();
  //(url, verb, controller, method)
  $router->AddRoute("", "GET", "Controller", "index");

  // ------------- HANDLER ROUTE ------------------//  
  $route = $_GET['action'];

  $array = $router->Route($route);

  if(sizeof($array) == 0) {
    echo "404";
  }
  else
  {
      $controller = $array[0];
      $metodo = $array[1];
      $url_params = $array[2];
      echo (new $controller())->$metodo($url_params);
  }
?>