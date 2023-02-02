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
    /**
     * @var \Paypal\CatalogProducts CatalogProducts
     */
    var $CatalogProducts;
    /**
     * @var \Paypal\Disputes Disputes
     */
    var $Disputes;
    /**
     * @var \Paypal\Identify Identify
     */
    var $Identify;
    /**
     * @var \Paypal\Invoice Invoice
     */
    var $Invoice;
    /**
     * @var \Paypal\Order Order
     */
    var $Order;
    /**
     * @var \Paypal\PartnerReferral PartnerReferral
     */
    var $PartnerReferral;
    /**
     * @var \Paypal\PaymentExperience PaymentExperience
     */
    var $PaymentExperience;
    /**
     * @var \Paypal\Payment Payment
     */
    var $Payment;
    /**
     * @var \Paypal\ReferencedPayout ReferencedPayout
     */
    var $ReferencedPayout;
    /**
     * @var \Paypal\Subscription Subscription
     */
    var $Subscription;
    /**
     * @var \Paypal\Tracking Tracking
     */
    var $Tracking;
    /**
     * @var \Paypal\TransactionSearch TransactionSearch
     */
    var $TransactionSearch;


    public function __construct(PaypalCredentials $credentials, $sandbox = true){
        $this->setMode($sandbox);
        $this->CatalogProducts = new CatalogProducts($credentials, $sandbox);
        $this->Disputes = new Disputes($credentials, $sandbox);
        $this->Identify = new Identify($credentials, $sandbox);
        $this->Invoice = new Invoice($credentials, $sandbox);
        $this->Order = new Order($credentials, $sandbox);
        $this->PartnerReferral = new PartnerReferral($credentials, $sandbox);
        $this->PaymentExperience = new PaymentExperience($credentials, $sandbox);
        $this->Payment = new Payment($credentials, $sandbox);
        $this->ReferencedPayout = new ReferencedPayout($credentials, $sandbox);
        $this->Subscription = new Subscription($credentials, $sandbox);
        $this->Tracking = new Tracking($credentials, $sandbox);
        $this->TransactionSearch = new TransactionSearch($credentials, $sandbox);
    }

    /**
     * @param $sandbox boolean
     * @return void
     *
     * Set Mode of PayPal connection
     */
    public function setMode($sandbox = 1){
        $this->sandbox = $sandbox;
    }
}