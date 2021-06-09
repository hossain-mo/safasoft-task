<?php
namespace App\OrderAndStoreShippingManagmentModule;
use App\OrderAndStoreModule\Order;
use App\ShippingCompaniesModule\CompanyFactory;

//this class handle layer between order and shipping companies
class OrderShippingController{
    private $order;
    private $companyFactory;
    public function __construct(Order $order, CompanyFactory $companyFactory){
        $this->order = $order;
        $this->companyFactory = $companyFactory;
    }

    public function registerShippingCompaniesToOrder($company){
        //assign company to order
        $this->order->addCompany( $this->companyFactory->getCompany($company));
        echo "register\n";
    }
    
    public function changeStatus($status){
        echo $this->order->company->doActionTwo() . "\n";


        echo $status === 'ready' ? $this->order->company->doActionOne() : null . "\n";
    }
    

    public function createDeliveryOptionForShippingCompany(ShippingCompany $shippingCompany){
        //assign company to order
        $this->order->addCompany( $this->companyFactory->getCompany($company));
        echo "register\n";
    }
}