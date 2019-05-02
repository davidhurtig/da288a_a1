<?php

require_once "vendor/autoload.php";

function apiCall($url)
{
    $client = new \GuzzleHttp\Client(['headers' => ['Accept' => 'application/json']]);
    try {
        $response = $client->request('GET', $url);
        $data = json_decode($response->getBody(), true);
        return $data;
    } catch (Exception $e) {
        throw new Exception($e);
    }
}
?>