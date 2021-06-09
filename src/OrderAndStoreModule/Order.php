<?php
namespace App\OrderAndStoreModule;
use App\ShippingCompaniesModule\CompanyStrategy;

class Order{
    public $company;
    public function __construct(){

    }


    public function addCompany(CompanyStrategy $company){
        $this->company = $company;
    }

    
    
}
