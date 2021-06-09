<?php
namespace App\ShippingCompaniesModule;
use App\ShippingCompaniesModule\CompanyStrategy;

//type of shipping comapny behaviour
class CompanyB implements CompanyStrategy{
    
    public function __construct(){
       
    }
    
    public function doActionOne(){
        return 'company B implementation';
    }

    public function doActionTwo(){
        return 'company B implementation';
    }

    public function doActionThree(){
        return 'company B implementation';
    }
}