<?php
namespace App\ShippingCompaniesModule;

class CompanyFactory{
    // it can be loaded from database but also must be cached
    private static $COMPANIES = ['CompanyA' => null, 'CompanyB' => null, 'CompanyC' => null];

    public function __construct(){
       
    }
    public function getCompany(string $companyName){
        return in_array($companyName, array_keys(self::$COMPANIES)) ? $this->instaniateCompany($companyName) : null;       
    }
    
    private function instaniateCompany (string $companyName){
        if(!self::$COMPANIES[$companyName]){
            $className = 'App\ShippingCompaniesModule\\'. $companyName;
            self::$COMPANIES[$companyName] = new $className(); 
        }
        return self::$COMPANIES[$companyName];
    }
        
    public function getOurInetgraedComapnies(){
        return self::$COMPANIES;
    }
    
}