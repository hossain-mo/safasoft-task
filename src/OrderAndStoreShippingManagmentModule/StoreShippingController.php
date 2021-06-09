<?php
namespace App\OrderAndStoreShippingManagmentModule;
use App\OrderAndStoreModule\Store;
use App\ShippingCompaniesModule\CompanyFactory;
use App\ShippingCompaniesModule\CompanyStrategy;

//this class handle layer between order and shipping companies
class StoreShippingController{
    private $companyFactory;
    private $store;

    public function __construct(Store $store, CompanyFactory $companyFactory){
        $this->store = $store;
        $this->companyFactory = $companyFactory;
    }
    public function registerShippingCompaniesToStore($companies){
        array_map(function($company){
            in_array($company, array_keys($this->companyFactory->getOurInetgraedComapnies())) 
            ? 
                $this->registerIntegratedShippingCompaniesToStore($this->companyFactory->getCompany($company)) 
            : 
                $this->registerCustomeShippingCompaniesToStore($company);
        }, $companies);
    }

    private function registerIntegratedShippingCompaniesToStore(CompanyStrategy $company){
        //assign company to order
        $this->store->addCompany($company);
        echo "integrated\n";
    }
    private function registerCustomeShippingCompaniesToStore($company){
        //do some thing else
        echo "custome\n";
    }


}