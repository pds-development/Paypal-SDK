<?php

namespace Paypal;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;

trait Authorization
{

    private static $paypalBaseURL;

    public function __construct(PaypalCredentials $credentials, $sandbox = true)
    {
        self::$paypalBaseURL = $sandbox ? "https://api-m.sandbox.paypal.com/" : "https://api-m.paypal.com/";
        $this->sandbox = $sandbox;
        $this->setHeaders($credentials);
        return $this->client;
    }

    private function setHeaders(PaypalCredentials $credentials){
        $this->client = new Client(["base_uri" => self::$paypalBaseURL, "headers" => [
            "User-Agent" => "paypal-connector-php/v0.0.1",
            "Authorization" => "Basic {$credentials->getEnvironmentCredentials($this->sandbox)}",
            "Content-Type" => "application/json",
            "Accept" => "application/json"
        ]]);

    }
}