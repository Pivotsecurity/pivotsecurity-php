<?php

namespace PivotSecurity;

abstract class PSAuth{

		protected static $key = null;
		protected static $base_url = "http://localhost:8080/api/";
		
	    public function __construct($key){
	    	self::$key = $key;
		}
		
		public static function geturl($path){
			return $base_url.$path;
		}
		
		public static function makerequest($path, $params){
		
			try{
				$response = \Httpful\Request::post(self::$base_url . $path, json_encode($params))
				->expectsJson()
				->basicAuth(self::$key,'')
				->send();
				if ($response->code == 200){
					return $response->body;
				}
				return self::$codes[strval($response->code)];
			
			}catch(Exception $e){
				return "You must pass valid values as the arguments to Pivot Security API "
				   . "method calls.  (HINT: an example call to get customer info call"
				   . "would be: \"PivotSecurity\\Account::info('uid','')\")";
		
			}
		}
		
		protected static $codes = array(
		'100' => 'Continue',
		'200' => 'OK',
		'201' => 'Created',
		'202' => 'Accepted',
		'203' => 'Non-Authoritative Information',
		'204' => 'No Content',
		'205' => 'Reset Content',
		'206' => 'Partial Content',
		'300' => 'Multiple Choices',
		'301' => 'Moved Permanently',
		'302' => 'Found',
		'303' => 'See Other',
		'304' => 'Not Modified',
		'305' => 'Use Proxy',
		'307' => 'Temporary Redirect',
		'400' => 'Bad Request',
		'401' => 'Unauthorized',
		'402' => 'Payment Required',
		'403' => 'Forbidden',
		'404' => 'Not Found',
		'405' => 'Method Not Allowed',
		'406' => 'Not Acceptable',
		'409' => 'Conflict',
		'410' => 'Gone',
		'411' => 'Length Required',
		'412' => 'Precondition Failed',
		'413' => 'Request Entity Too Large',
		'414' => 'Request-URI Too Long',
		'415' => 'Unsupported Media Type',
		'416' => 'Requested Range Not Satisfiable',
		'417' => 'Expectation Failed',
		'500' => 'Internal Server Error',
		'501' => 'Not Implemented',
		'503' => 'Service Unavailable'
	);
}