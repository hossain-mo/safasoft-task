<?php
namespace App\ShippingCompaniesModule;
use App\ShippingCompaniesModule\CompanyStrategy;

//type of shipping comapny behaviour
class CompanyA implements CompanyStrategy{
    
    public function __construct(){
       
    }
    
    public function doActionOne(){
        return 'company A implementation';
    }

    public function doActionTwo(){
        return 'company A implementation';
    }

    public function doActionThree(){
        return 'company A implementation';
    }
}