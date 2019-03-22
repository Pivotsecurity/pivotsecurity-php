<?php

namespace PivotSecurity;

use \Httpful\Request;

final class Account extends PSAuth
{
    const OBJECT_NAME = "account";
    const OP_CREATE= "account/create";
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
	
	public static function createCustomer($uid = null, $email = null){
		return self::makerequest(self::OP_CREATE, array("uid"=>$uid, 'email' => $email));
	}
	public static function info($uid = null, $email = null){
		return self::makerequest(self::OP_INFO, array("uid"=>$uid, 'email' => $email));
	}
	public static function riskscore($uid = null, $email = null){
		return self::makerequest(self::OP_RISK_SCORE, array("uid"=>$uid, 'email' => $email));
	}
	public static function updateRiskscore($uid = null, $email = null, $riskscore = 0){
		return self::makerequest(self::OP_UPDATE_RISK_SCORE, array("uid"=>$uid, 'email' => $email, 'riskscore'=>$riskscore));
	}
	public static function qrcode($uid = null, $email = null){
		return self::makerequest(self::OP_QRCODE, array("uid"=>$uid, 'email' => $email));
	}
	public static function authcode($uid = null, $email = null){
		return self::makerequest(self::OP_AUTH_CODE, array("uid"=>$uid, 'email' => $email));
	}
	public static function logs($uid = null, $email = null){
		return self::makerequest(self::OP_LOGS, array("uid"=>$uid, 'email' => $email));
	}
	public static function lock($uid = null, $email = null){
		return self::makerequest(self::OP_LOCK, array("uid"=>$uid, 'email' => $email));
	}
	public static function unlock($uid = null, $email = null){
		return self::makerequest(self::OP_UNLOCK, array("uid"=>$uid, 'email' => $email));
	}
	public static function trainml($uid = null, $email = null, $data = null){
		return self::makerequest(self::OP_TRAIN_ML, array("uid"=>$uid, 'email' => $email, 'data'=> $data));
	}
	public static function testml($uid = null, $email = null, $data = null){
		return self::makerequest(self::OP_TEST_ML, array("uid"=>$uid, 'email' => $email, 'data' => $data));
	}

}