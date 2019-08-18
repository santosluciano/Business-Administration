<?php
  class EmployeeTypeSpecialtyModel extends Model
 {
    function __construct()
    {
      parent::__construct();
    }
    
    public function getAll(){
        $sentencia = $this->db->prepare(
            "SELECT * FROM employee_type_specialty" 
          );
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);    
    }

    public function getById($id){
        $sentencia = $this->db->prepare(
            "SELECT * FROM employee_type_specialty WHERE $id = ?" 
          );
        $sentencia->execute([$id]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);            
    }

    public function save($employeeTypeSpecialty){
        $sentencia = $this->db->prepare(
            "INSERT INTO  employee_type_specialty ('id_employee_type','name')
                VALUES (?)" 
          );
        $sentencia->execute([$employeeTypeSpecialty->getEmployeeType()->getId(),$employeeTypeSpecialty->getName()]);
        return $this->db->lastInsertId();    
    }

    public function update($employeTypeSpecialty){
        $sentencia = $this->db->prepare(
            "UPDATE employee_type_specialty SET 'id_employee_type' = ?, 'name' = ? WHERE 'id' = ?" 
          );
        $sentencia->execute([$employeTypeSpecialty->getEmployeeType()->getId(),$employeTypeSpecialty->getName(),$employeTypeSpecialty->getId()]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);            
    }

    public function delete($id){
        $sentencia = $this->db->prepare(
            "DELETE FROM employee_type_speacialty WHERE id = ?" 
          );
        $sentencia->execute([$id]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);            
    }
}
?>