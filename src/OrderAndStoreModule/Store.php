<?php
namespace App\OrderAndStoreModule;
use App\ShippingCompaniesModule\CompanyStrategy;
class Store{
    public $companies;
    public function __construct(){
        $this->companies = [];
    }
    
    public function addCompany(CompanyStrategy $strategy){
        array_push($this->companies, $strategy);
    }

    
    
}
