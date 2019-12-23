<?php

namespace Frontline;


class Utils {

	public static $url = "https://portal.carmmunity.co.uk";

	public function request($url, $method, $payload=[]) {
	
		if(isset($payload['file'])) {

			if (function_exists('curl_file_create')) { // php 5.5+
			  $cFile = curl_file_create($payload['file'], mime_content_type($payload['file']));
			} else { // 
			  $cFile = '@' . realpath($payload['file']);
			}

			$payload['file'] = $cFile;

		}

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL,"{$url}?api_token={$this->token}&secret={$this->secret}");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			"content-type: multipart/form-data",	
		));

		$response = curl_exec($curl);
		
		$err = curl_error($curl);
		
		curl_close($curl);
		
		if ($err) {
			return false;
		} else {
			return  $response;
		}

	}


	// public function fileRequest($url, $method, $payload=[]) {

	// 	if (function_exists('curl_file_create')) { // php 5.5+
	// 	  $cFile = curl_file_create($payload['file'], mime_content_type($payload['file']));
	// 	} else { // 
	// 	  $cFile = '@' . realpath($payload['file']);
	// 	}

	// 	$payload['file'] = $cFile;
		
	// 	$curl = curl_init();
	// 	curl_setopt($curl, CURLOPT_URL,"{$url}?api_token={$this->token}");
	// 	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	// 	curl_setopt($curl, CURLOPT_POST,1);
	// 	curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
	// 	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	// 		"content-type: multipart/form-data",	
	// 	));
		
	// 	$result = curl_exec($curl);
		
	// 	$err = curl_error($curl);
		
	// 	curl_close ($curl);
		
	// 	if ($err) {
	// 		return false;
	// 	} else {
	// 		return $result;
	// 	}

		
	// }

}