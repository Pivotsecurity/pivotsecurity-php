<?php

namespace PivotSecurity;

use \Httpful\Request;

final class Account extends PSAuth
{
    const OBJECT_NAME = "account";
    const OP_INFO = "account/info";
    const OP_RISK_SCORE = "account/riskscore";
    const OP_UPDATE_RISK_SCORE = "account/updateriskscore";
    const OP_QRCODE = "account/qrcode";
    const OP_AUTH_CODE = "account/authcode";
    const OP_LOGS = "account/logs";
    const OP_LOCK = "account/lock";
    const OP_UNLOCK = "account/unlock";
    const OP_TRAIN_ML = "account/trainml";
    const OP_TEST_ML = "account/testml";
    
 	public function __construct($public_key = null, $private_key = null){
    	parent::__construct($private_key);
	}
	public static function setPublicKey($public_key){
		self::$public_key = $public_key;
	}
	public static function setPrivateKey($private_key){
		self::$private_key = $private_key;
	}
	
	public static function info($uid = null, $email = null){
		
		$response = self::makerequest(self::OP_INFO, array("uid"=>$uid, 'email' => $email));
		return $response;
	}
}