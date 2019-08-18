<?php
  class CompanyModel extends Model
 {
    function __construct()
    {
      parent::__construct();   
    }

    public function getCompanyById($id)
    {
      $sentencia = $this->db->prepare(
        "SELECT * FROM company c WHERE c.id = ?" 
      );
      $sentencia->execute([$id]);
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllCompanies()
    {
      $sentencia = $this->db->prepare(
        "SELECT * FROM company" 
      );
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>