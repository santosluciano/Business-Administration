<?php
  require_once 'view/EmployeeView.php';
  require_once 'model/EmployeeModel.php';

  class EmployeeController extends Controller{
        
    function __construct(){ 
      $this->model = new EmployeeModel();
      $this->view = new EmployeeView();
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
    public function showByCompany($id_company){
      $employeesInfo = $this->model->getAllByCompanyId($id_company);
      $employees = [];
      foreach($employeesInfo as $employeeInfo){
        $employees[] = $this->createEmployeeObject($employeeInfo);
      }
      $this->view->showEmployeesByCompany($employees);
    }
    private function createEmployeeObject($employeeInfo){
      $type_specialty = $this->typeSpecialtyController->getById($employeeInfo["id_type_specialty"]);
      $employee = new Employee($employeeInfo["id"],$employeeInfo["name"],$employeeInfo["last_name"],$employeeInfo["age"],$type_specialty);
      return $employee;
    }
    public function add(){
      $type = new EmployeeType($_POST["employeeType"],'a');
      $typeSpecialty = new EmployeeTypeSpecialty($_POST["employeeTypeSpecialty"],'a',$type);
      $employee = new Employee(1,$_POST["name"],$_POST["lastName"],$_POST["age"],$typeSpecialty);
      $idCompany = $_POST["companyId"];
      $this->model->save($employee,$idCompany);
    }
    public function getById($id,$companyId){
      $employeeInfo = $this->model->getById($id,$companyId);
      if ($employeeInfo)
        $employee = $this->createEmployeeObject($employeeInfo);
      else
        $employee = null;
      return $employee;
    }
    public function searchById(){
      $id = $_POST['employeeId'];
      $companyId = $_POST['idCompany'];
      $employee = $this->getById($id,$companyId);
      $this->view->showSearchResult($employee);
    }
  }
?>