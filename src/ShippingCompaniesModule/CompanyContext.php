<?php
namespace App\ShippingCompaniesModule;
use App\ShippingCompaniesModule\CompanyStrategy;

//context class for offers
class CompanyContext{
    private $comapny;
    public function __construct(companyStrategy $comapny){
        $this->comapny = $comapny;
    }

    public function executeActionOne(){
        $this->comapny->doActionOne();
    }

    public function executeActionTwo(){
        $this->comapny->doActionTwo();
    }

    public function doActionThree(){
        $this->comapny->doActionThree();
    }
}