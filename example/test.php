<?php

require(__DIR__ . '/../init.php');
use \PivotSecurity\Account;

$ac = new Account('','d48f21a6e0c94880b61daa2b9e5a2327');

$response = $ac->info('A13');

echo var_dump($response);

//var_dump(json_decode(json_encode($response->body, true)));
                        
                        