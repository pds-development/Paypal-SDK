<?php

namespace Paypal;

class PaypalCredentials
{

    private $live_id = "";
    private $live_secret = "";
    private $sandbox_id = "";
    private $sandbox_secret = "";

    public function getEnvironmentCredentials($sandbox = true){
        if($sandbox) {
            return $this->sandbox_id . ":" . $this->sandbox_secret;
        } else {
            return $this->live_id . ":" . $this->live_secret;
        }
    }

    public function setLiveCredentials($id, $secret) {
        $this->setLiveID($id);
        $this->setLiveSecret($secret);
    }

    public function setLiveID($key){
        $this->live_id = $key;
    }
    public function setLiveSecret($key){
        $this->live_secret = $key;
    }
    public function setSandboxID($key){
        $this->sandbox_id = $key;
    }
    public function setSandboxSecret($key){
        $this->sandbox_secret = $key;
    }

}