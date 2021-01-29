<?php

namespace Frontline;

use \Frontline\Utils;

class Frontline extends Utils {

	public function __construct($token, $secret) {
		$this->token = $token;
		$this->secret = $secret;
		
	}

	public function get($endpoint, $params=[]) {

		return $this->request(
			self::$url.$endpoint,
			'GET',
			http_build_query($params)
		);
	}

	public function update($endpoint, $params=[]) {

		return $this->request(
			self::$url.$endpoint,
			'PATCH',
			http_build_query($params)
		);
		
	}

	public function post($endpoint, $params=[]) {

		return $this->request(
			self::$url.$endpoint,
			'POST',
			$params
		);
		
	}

}