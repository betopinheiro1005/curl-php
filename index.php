<?php

require_once 'autoload.php';

use App\Classes\Curl;

$curl = new Curl('https://reqres.in/api/users');

$array = [
    'name' => 'Emilio Bravo',
    'job' => 'Web developer'
];

$response = $curl->init()->setOption()->setOption(CURLOPT_POST, true)->buildQuery($array)->setOption(CURLOPT_RETURNTRANSFER, true)->decode()->fetch();

echo "<b>id: </b>
$response->id
<br />
<b>Name: </b>
$response->name
<br />
<b>Job: </b>
$response->job
<br />
<b>Created at</b>
$response->createdAt
<br />";


