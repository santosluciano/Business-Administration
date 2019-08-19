<?php
  require_once 'model/EmployeeTypeModel.php';

  class EmployeeTypeController extends Controller{
        
    function __construct(){ 
        $this->model = new EmployeeTypeModel();
    }
    public function getById($id_type){
        $typeInfo = $this->model->getById($id_type);
        $employeeType = $this->createTypeSpecialtyObject($typeInfo);
        return $employeeType;
    }
    private function createTypeSpecialtyObject($typeInfo){
        $employeeType = new EmployeeType($typeInfo["id"],$typeInfo["name"]);
        return $employeeType;
    }  
  
  }
?>