<?php
$url = 'localhost:3000/api/users';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$a = curl_exec($curl);
print_r($a);
//$data = json_decode($a);
// foreach($data as $value) {
//     echo "nama = ".$value->name;
//     echo "<br>";
//     echo "pass = ".$value->password;
//     print_r($data);
//     echo "<br><br><br>";
// }
?>
