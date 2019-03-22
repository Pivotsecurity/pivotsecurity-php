<?php

namespace PivotSecurity;

abstract class PSAuth{

		protected static $key = null;
		protected static $base_url = "http://localhost:8080/api/";
		protected static $rest_client = null; 
		
	    public function __construct($key){
	    	self::$key = $key;
	    	self::$rest_client = new RestClient(['base_url' => self::$base_url,
		    'headers' => ['Authorization' => 'Basic ' . base64_encode(self::$key . ':')], 
		     'user_agent' => "pivotsecurity-php/1.0"
			]);
			self::$rest_client->register_decoder('json', function($data){return json_decode($data, TRUE);});
		}
}