<?php
namespace App\ShippingCompaniesModule;
use App\ShippingCompaniesModule\CompanyStrategy;

//type of shipping comapny behaviour
class CompanyC implements CompanyStrategy{
    
    public function __construct(){
       
    }
    
    public function doActionOne(){
        return 'company C implementation';
    }

    public function doActionTwo(){
        return 'company C implementation';
    }

    public function doActionThree(){
        return 'company C implementation';
    }
}