<?php
  class CompanyView extends View
  {
    function __construct()
    {
        parent::__construct();
    }

    public function showCompanies($companies){
      $this->smarty->assign('companies',$companies);
      $this->smarty->display('companies.tpl');
    }
  }
?>