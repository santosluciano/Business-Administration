<?php
    class EmployeeTypeSpecialty {
        
        private $id;
        private $name;
        private $employeeType;

        function __construct($id,$name,$employeeType){ 
            $this->setId($id);
            $this->setName($name);
            $this->setEmployeeType($employeeType);
        }
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getEmployeeType(){
            return $this->employeeType;
        }
        public function setEmployeeType($employeeType){
            $this->employeeType = $employeeType;
        }
    }
?>