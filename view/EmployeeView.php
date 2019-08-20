<?php
  class EmployeeView extends View
  {
    function __construct()
    {
        parent::__construct();
    }
    public function showEmployeesByCompany($employees){
      $this->smarty->assign('employees',$employees);
      $this->smarty->display('employees.tpl');
    }
    public function showSearchResult($employee){
      $this->smarty->assign('employee',$employee);
      $this->smarty->display('searchEmployee.tpl');

    }
  }
?>