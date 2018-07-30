<?php

use GermanoZambelli\Hassio\Credentials\ApiCredentials;
use GermanoZambelli\Hassio\Hassio;

include __DIR__ . '/../vendor/autoload.php';

$apiCredentials = new ApiCredentials('http://ipaddress:port', 'username');

$hassio = new Hassio($apiCredentials);

var_dump($hassio->getConfig());