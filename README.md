# pivotsecurity-php
PHP API interface for Pivot Security

Read full docs: https://github.com/Pivotsecurity/pivotsecurity-php/tree/master/doc 


# Installation

## Prerequisites

- PHP 4.X, 5.X, 7.X

## Install Package

## Using Composer:

composer require pivotsecurity/pcs-php


require('vendor/autoload.php')

use \PivotSecurity\Account;
use \PivotSecurity\Customer;

$ac = new Account(null,'d48f21a6e0c94880b61daa2b9e5a2327');
$response = $ac->info('A13');
echo var_dump($response);


## Manual:

git clone https://github.com/Pivotsecurity/pivotsecurity-php.git
cd pivotsecurity-php


require('init.php')

use \PivotSecurity\Account;
use \PivotSecurity\Customer;

$ac = new Account(null,'d48f21a6e0c94880b61daa2b9e5a2327');
$response = $ac->info('A13');
echo var_dump($response);

