<?php

namespace Paypal;
use Paypal\CatalogProducts;
use Paypal\Disputes;
use Paypal\Identify;
use Paypal\Invoice;
use Paypal\Order;
use Paypal\PartnerReferral;
use Paypal\PaymentExperience;
use Paypal\Payment;
use Paypal\ReferencedPayout;
use Paypal\Subscription;
use Paypal\Tracking;
use Paypal\TransactionSearch;

use Paypal\PaypalCredentials;

class Paypal
{
    public function __construct(PaypalCredentials $credentials, $currentMode = true){
        $this->CatalogProducts = new CatalogProducts($credentials, $currentMode);
        $this->Disputes = new Disputes($credentials, $currentMode);
        $this->Identify = new Identify($credentials, $currentMode);
        $this->Invoice = new Invoice($credentials, $currentMode);
        $this->Order = new Order($credentials, $currentMode);
        $this->PartnerReferral = new PartnerReferral($credentials, $currentMode);
        $this->PaymentExperience = new PaymentExperience($credentials, $currentMode);
        $this->Payment = new Payment($credentials, $currentMode);
        $this->ReferencedPayout = new ReferencedPayout($credentials, $currentMode);
        $this->Subscription = new Subscription($credentials, $currentMode);
        $this->Tracking = new Tracking($credentials, $currentMode);
        $this->TransactionSearch = new TransactionSearch($credentials, $currentMode);
    }

    /**
     * @param $sandbox boolean
     * @return void
     */
    public function setMode($sandbox = 1){
        $this->sandbox = $sandbox;
    }

    public function CatalogProducts() {
        return $this->CatalogProducts;
    }
    public function Disputes() {
        return $this->Disputes;
    }
    public function Identify() {
        return $this->Identify;
    }
    public function Invoice() {
        return $this->Invoice;
    }
    public function Order() {
        return $this->Order;
    }
    public function PartnerReferral() {
        return $this->PartnerReferral;
    }
    public function PaymentExperience() {
        return $this->PaymentExperience;
    }
    public function Payment() {
        return $this->Payment;
    }
    public function ReferencedPayout() {
        return $this->ReferencedPayout;
    }
    public function Subscription() {
        return $this->Subscription;
    }
    public function Tracking() {
        return $this->Tracking;
    }
    public function TransactionSearch() {
        return $this->TransactionSearch;
    }
}