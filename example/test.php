<?php

require(dirname(__FILE__) . '/../init.php');
require(dirname(__FILE__) . '/../vendor/autoload.php');

//$account = new PivotSecurity\Account(null, 'd48f21a6e0c94880b61daa2b9e5a2327');

//$account->info('test2@pcs.com');


$url = "http://localhost:8080/api/account/info";
$response = \Httpful\Request::post($url, json_encode(array("uid"=>"A13")))
    ->expectsJson()
    ->basicAuth('d48f21a6e0c94880b61daa2b9e5a2327','')
    ->send();

var_dump($response->body[0]->email);
                        
                        