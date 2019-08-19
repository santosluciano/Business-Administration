<?php
    class Company {

        private $id;
        private $name;
        private $employees;

        function __construct($id,$name) {
            $this->id = $id;
            $this->name = $name;  
            $this->employees = [];
        }
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getName() {
            return $this->name;
        }
        public function setName($name) {
            $this->name = $name;
        }
        public function getEmployees() {
            return $this->employees;
        }
        public function setEmployees($employees) {
            $this->employees = $employees;
        }
        public function addEmployee($employee){
            $this->employees[] = $employee;
        }
        public function avgEmployees(){
            $total_age = 0;
            foreach ($employees as $employee){
                $avg += $employee->getAge();
            }
            return $total_age/count($employees); 
        }
    }
?>
