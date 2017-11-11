<?php
$data = "name=aji&password=1234&umur=15";
$url = 'localhost:3000/api/users';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_exec($curl);
?>
