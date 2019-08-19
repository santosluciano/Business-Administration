<?php
  require_once 'model/EmployeeTypeSpecialtyModel.php';

  class EmployeeTypeSpecialtyController extends Controller{
        
    function __construct(){ 
        $this->model = new EmployeeTypeSpecialtyModel();
        $this->typeController = new EmployeeTypeController();    
    }
    public function getById($id_type_specialty){
        $typeSpecialtyInfo = $this->model->getById($id_type_specialty);
        $employeeTypeSpecialty = $this->createTypeSpecialtyObject($typeSpecialtyInfo);
        return $employeeTypeSpecialty;
    }
    private function createTypeSpecialtyObject($typeSpecialtyInfo){
        $employeeType = $this->typeController->getById($typeSpecialtyInfo["id_employee_type"]);
        $employeeTypeSpecialty = new EmployeeTypeSpecialty($typeSpecialtyInfo["id"],$typeSpecialtyInfo["name"],$employeeType);
        return $employeeTypeSpecialty;
    }  
  
  }
?>