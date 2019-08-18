<?php
    class Employee extends Person{

        private $type_specialty;

        function __construct($id,$name,$last_name,$age,$type_specialty) {
            parent::__construct($id,$name,$last_name,$age);
            $this->setTypeSpecialty($type_specialty);
        }
        public function getTypeSpecialty(){
            return $this->type_specialty;
        }
        public function setTypeSpecialty($type_specialty){
            $this->type_specialty = $type_specialty;
        }
    }
?>