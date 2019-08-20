<?php
  require_once 'model/EmployeeTypeModel.php';

  class EmployeeTypeController extends Controller{
        
    function __construct(){ 
        $this->model = new EmployeeTypeModel();
    }
    public function getById($id_type){
        $typeInfo = $this->model->getById($id_type);
        $employeeType = $this->createTypeObject($typeInfo);
        return $employeeType;
    }
    private function createTypeObject($typeInfo){
        $employeeType = new EmployeeType($typeInfo["id"],$typeInfo["name"]);
        return $employeeType;
    }  
    public function getAll(){
        $typesInfo = $this->model->getAll();
        $employeeTypes = [];
        foreach($typesInfo as $typeInfo){
          $employeeTypes[] = $this->createTypeObject($typeInfo);
        }
        return $employeeTypes;
    }
  
  }
?>