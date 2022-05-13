<?php

// Fazendo uma petição GET

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://reqres.in/api/users/2');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if(curl_errno($ch)){
    echo curl_error($ch);
} else {
    $decoded = json_decode($response, true);  // converte json em array
}

var_dump($decoded);

curl_close($ch);