<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://snapchat-checker.p.rapidapi.com/check_bulk",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => json_encode([
		'input' => [
				'test@gmail.com',
				'john@doe.com',
				'19295551234'
		]
	]),
	CURLOPT_HTTPHEADER => [
		"Content-Type: application/json",
		"x-rapidapi-host: snapchat-checker.p.rapidapi.com",
		"x-rapidapi-key: Sign Up for Key"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}