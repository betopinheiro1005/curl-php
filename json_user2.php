<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://reqres.in/api/users/2');
curl_exec($ch);

if(curl_errno($ch)){
    echo curl_error($ch);
}

curl_close($ch);