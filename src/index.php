<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');


require_once __DIR__ . '/../vendor/autoload.php';
use App\ShippingCompaniesModule\CompanyFactory;
use App\OrderAndStoreShippingManagmentModule\OrderShippingController;
use App\OrderAndStoreShippingManagmentModule\StoreShippingController;
use App\OrderAndStoreModule\Store;
use App\OrderAndStoreModule\Order;


$factory      = new CompanyFactory();
$storeManager = new StoreShippingController(new Store(), $factory);
$orderManager = new OrderShippingController(new Order(), $factory);



echo $storeManager->registerShippingCompaniesToStore(['CompanyA' , 'CompanyB' , 'CompanyC', 'ComapnyD']);


echo $orderManager->registerShippingCompaniesToOrder('CompanyA');


echo $orderManager->changeStatus('ready');
