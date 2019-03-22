<?php

namespace PivotSecurity;

final class Customer extends PSAuth
{
    const OBJECT_NAME = "customer";
    const OP_AUTH = "customer/auth";
    const OP_VALIDATE = "customer/verify";

 	public function __construct($public_key = null, $private_key = null){
    	parent::__construct($public_key);
	}
	
	public static function getAuthorization($uid = null, $email = null){
		return self::makerequest(self::OP_AUTH, array("uid"=>$uid, 'email' => $email));
	}

	public static function validateAuthorization($uid = null, $email = null, $code = null){
		return self::makerequest(self::OP_VALIDATE, array("uid"=>$uid, 'email' => $email, 'code' => $code));
	}

}