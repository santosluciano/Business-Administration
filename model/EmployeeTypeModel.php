<?php
  class EmployeeTypeModel extends Model
 {
    function __construct()
    {
      parent::__construct();
    }
    
    public function getAll(){
        $sentencia = $this->db->prepare(
            "SELECT * FROM employee_type" 
          );
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);    
    }

    public function getById($id_type){
        $sentencia = $this->db->prepare(
            "SELECT * FROM employee_type WHERE id = ?" 
          );
        $sentencia->execute([$id_type]);
        return $sentencia->fetch(PDO::FETCH_ASSOC);            
    }

    public function save($employeeType){
        $sentencia = $this->db->prepare(
            "INSERT INTO  employee_type ('name')
                VALUES (?)" 
          );
        $sentencia->execute([$employeeType->getName()]);
        return $this->db->lastInsertId();    
    }

    public function update($employeeType){
        $sentencia = $this->db->prepare(
            "UPDATE employee_type SET 'name' = ? WHERE 'id' = ?" 
          );
        $sentencia->execute([$employeeType->getId(),$employeeType->getName()]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);            
    }

    public function delete($id){
        $sentencia = $this->db->prepare(
            "DELETE FROM employee_type WHERE id = ?" 
          );
        $sentencia->execute([$id]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);            
    }
}
?>