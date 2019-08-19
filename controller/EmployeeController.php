<?php
  require_once 'model/EmployeeModel.php';
  //require_once 'view/EmployeeView.php';

  class EmployeeController extends Controller{
        
    function __construct(){ 
      $this->model = new EmployeeModel();
    //  $this->view = new EmployeeView();
      $this->typeSpecialtyController = new EmployeeTypeSpecialtyController();
    }
    public function getByCompany($id_company){
      $employeesInfo = $this->model->getAllByCompanyId($id_company);
      $employees = [];
      foreach($employeesInfo as $employeeInfo){
        $employees[] = $this->createEmployeeObject($employeeInfo);
      }
      return $employees;
    }
    private function createEmployeeObject($employeeInfo){
      $type_specialty = $this->typeSpecialtyController->getById($employeeInfo["id_type_specialty"]);
      $employee = new Employee($employeeInfo["id"],$employeeInfo["name"],$employeeInfo["last_name"],$employeeInfo["age"],$type_specialty);
      return $employee;
    }

  }
?>