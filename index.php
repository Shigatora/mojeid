<?php
include_once 'vendor/autoload.php';

$connect = new \MojeId\Connect('https://mojeid.regtest.nic.cz/endpoint/');
var_dump($connect->isTestMode());