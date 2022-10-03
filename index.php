<?php
// users requirements
require_once __DIR__ . '/./class/user/user.php';
require_once __DIR__ . '/./class/user/customer.php';
require_once __DIR__ . '/./class/user/employee.php';

// proprieties requirements
require_once __DIR__ . '/./class/properties/properties.php';
require_once __DIR__ . '/./class/properties/rent_properties.php';
require_once __DIR__ . '/./class/properties/sale_properties.php';

// printing properties for rent
$rent_property1 = new RentProperties('flat', 'address x1', 500);
var_dump($rent_property1);
$rent_property1->surface = 150;
echo '<h3>Rent Property Object</h3>';
echo '<ul>';
echo '<li><b> type: ' . $rent_property1->type . '</b></li>' ;
echo '<li><b>address: ' . $rent_property1->address . '</b></li>';
echo '<li><b>rent price: ' . '€' . $rent_property1->getFormatRent . '</b></li>';
echo '<li><b>properties surface: ' . $rent_property1->surface . 'm2' . '</b></li>';
echo '</ul>';

echo '<br>';
// printing properties for sale
$sale_property1 = new SaleProperties('2 floors', 'address x2', 200000);
var_dump($sale_property1);

$sale_property1->surface = 80;
echo '<h3>Sale Property Object</h3>';
echo '<ul>';
echo '<li><b> type: ' . $sale_property1->type . '</b></li>' ;
echo '<li><b> address: ' . $sale_property1->address . '</b></li>';
echo '<li><b> sale price: ' . '€' . $sale_property1->sale_price . '</b></li>';
echo '<li><b> surface: ' . $sale_property1->surface . 'm2' . '</b></li>';
echo '</ul>';

echo '<br>';
// printing customer user
$customer1 = new Customer('kevin', 'kevin@balydev.com', 'pwdx1', 'ITBX001');
var_dump($customer1);

echo '<h3>Customer Object</h3>';
echo '<ul>';
echo '<li> <b>name: </b>' . $customer1->name . '</li>';
echo '<li> <b>email: </b>' . $customer1->email . '</li>';
echo '<li> <b>credit card: </b>' . $customer1->getCreditCard(). '</li>';
echo '</ul>';

echo '<br>';
// printing customer user
$employee1 = new Employee('Travis', 'travis@balydev.com', 'pwdx2', 'UW1');
var_dump($employee1);

echo '<h3>Employee Object</h3>';
echo '<ul>';
echo '<li> <b>name: </b>' . $employee1->name . '</li>';
echo '<li> <b>email: </b>' . $employee1->email . '</li>';
echo '<li> <b>wallet: </b>' . $employee1->getWallet(). '</li>';
echo '</ul>';