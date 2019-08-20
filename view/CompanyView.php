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
    public function showCompany($company,$types,$typesSpecialty){
      $this->smarty->assign('company',$company);
      $this->smarty->assign('types',$types);
      $this->smarty->assign('typesSpecialty',$typesSpecialty);
      $this->smarty->display('company.tpl');
    }
  }
?>