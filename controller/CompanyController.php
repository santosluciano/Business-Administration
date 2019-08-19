<?php
  require_once 'model/CompanyModel.php';
  require_once 'view/CompanyView.php';

  class CompanyController extends Controller{
        
    function __construct(){ 
      $this->model = new CompanyModel();
      $this->view = new CompanyView();
      $this->employeeController = new EmployeeController();
    }
    public function getAll(){
      $companiesInfo = $this->model->getAllCompanies();
      $companies = [];
      foreach ($companiesInfo as $companyInfo){
        $companies[] = $this->createCompanyObject($companyInfo);
      }
      return $companies;
    }
    public function showAll(){
      $companies = $this->getAll();
      $this->view->showCompanies($companies);
    }
    private function createCompanyObject($companyInfo){
      $company = new Company($companyInfo["id"],$companyInfo["name"]);
      $employees = $this->employeeController->getByCompany($company->getId());
      $company->setEmployees($employees);      
      return $company;
    }
    public function addEmployee($idEmployee, $idCompany)
    {
      $this->model->addEmployee($idEmployee, $idCompany);
    }
  }
?>
