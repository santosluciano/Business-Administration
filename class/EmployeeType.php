<?php
    class EmployeeType {
        
        private $id;
        private $name;

        function __construct($id,$name){ 
            $this->setId($id);
            $this->setName($name);
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
    }
?>