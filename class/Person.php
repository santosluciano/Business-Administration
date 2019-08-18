<?php
    class Person {

        private $id;
        private $name;
        private $last_name;
        private $age;

        function __construct($id,$name,$last_name,$age) {
            $this->setId($id);
            $this->setName($name);  
            $this->setLastName($last_name);  
            $this->setAge($age);  
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
        public function getLastName() {
            return $this->name;
        }
        public function setLastName($last_name) {
            $this->last_name = $last_name;
        }
        public function getAge() {
            return $this->age;
        }
        public function setAge($age) {
            $this->age = $age;
        }
        public function getFullName(){
            return $this->name.' '.$this->last_name;
        }
    }
?>