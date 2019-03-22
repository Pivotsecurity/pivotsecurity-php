<?php

require(__DIR__ . '/../init.php');
use \PivotSecurity\Account;
use \PivotSecurity\Customer;

$ac = new Account(null,'d48f21a6e0c94880b61daa2b9e5a2327');
$response = $ac->info('A13');
echo var_dump($response);

$ac->setFormat('array');
$response = $ac->qrcode('A13');

echo var_dump($response);



$cu = new Customer('f6074a20b7be4199b3300adf9a2c6efd');
$response = $cu->getAuthorization('A13');
echo var_dump($response);

$cu->setFormat('array');
$response = $cu->validateAuthorization('A13', null, '1231');

echo var_dump($response);
                        
                        