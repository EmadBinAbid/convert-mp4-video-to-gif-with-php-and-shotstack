<?php
require 'vendor/autoload.php';

use Shotstack\Client\Api\EditApi;
use Shotstack\Client\Configuration;

$config = Configuration::getDefaultConfiguration()
    ->setHost('https://api.shotstack.io/stage')
    ->setApiKey('x-api-key', 'your_key_here'); // use the API key issued to you

$client = new EditApi(null, $config);
$response = $client->getRender($argv[1], false, true)->getResponse();

echo "\nStatus: " . strtoupper($response->getStatus()) . "\n\n";

if ($response->getStatus() == 'done') {
    echo ">> Asset URL: " . $response->getUrl() . "\n";
}
?>