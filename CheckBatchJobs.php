<?php

 

	$url = 'https://test.salesforce.com/services/oauth2/token';
	$postData = array(
				'grant_type' => 'password',
				'client_id' => '3MVG9ahGHqp.k2_zYUE07SLTHXF6LMtU7Jx0jDTHRxXTum6oSef6O5DakBtRhRunWDZmrL5rF98Fize0nYb6z',
				'client_secret' => '2898051835163056217',
				'username' => 'sakthivel.n@happiestminds.com.hmdev',
				'password' => 'Welcome@123so5wmZGDCaGZnnxM53aIoBHh',
);
		$jsonString = json_encode($postData);
		
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: text/html; charset=UTF-8', 'Connection: Keep-Alive'));
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonString);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		echo $result = curl_exec($curl);
		curl_close($curl);
		
		?>
		