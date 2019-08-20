<?php
  class EmployeeModel extends Model
 {
    function __construct()
    {
      parent::__construct();
    }

    public function getById($id,$companyId)
    {   
        $sentencia = $this->db->prepare(
            "SELECT * FROM employee e WHERE e.id = ? AND e.id_company = ?" 
        );
        $sentencia->execute([$id,$companyId]);
        return $sentencia->fetch(PDO::FETCH_ASSOC);    
    }

    public function getAllByCompanyId($idCompany)
    {
        $sentencia = $this->db->prepare(
            "SELECT * FROM employee e WHERE e.id_company = ?" 
        );
        $sentencia->execute([$idCompany]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);    
    }

    public function getAll()
    {
        $sentencia = $this->db->prepare(
            "SELECT * FROM employee e" 
        );
        $sentencia->execute([$id]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);    
    }

    public function save($employee,$idCompany)
    {        
      $sentencia = $this->db->prepare(
        "INSERT INTO `employee` (`name`, `last_name`, `age`, `id_company`, `id_type_specialty`) VALUES (?, ?, ?, ?, ?)"
      );
      $sentencia->execute([$employee->getName(),$employee->getLastName(),$employee->getAge(),$idCompany,$employee->getTypeSpecialty()->getId()]);
      return $this->db->lastInsertId();
    }

    public function update($employee)
    {        
      $sentencia = $this->db->prepare(
        "UPDATE  employee SET 'name'=?,'last_name'=?,'age'=?,'id_company'=?,'id_type_specialty'=?"
      );
      $sentencia->execute([$employee->getName(),$employee->getLastName(),$employee->getAge(),$employee->getCompany()->getId(),$employee->getSpecialty()->getId()]);
      return $this->db->lastInsertId();
    }

}
?>