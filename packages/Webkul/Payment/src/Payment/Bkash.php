<?php

namespace Webkul\Payment\Payment;

class Bkash extends Payment
{
    /**
     * Payment method code.
     *
     * @var string
     */
    protected $code = 'bkash';

    /**
     * Get redirect url.
     *
     * Returns the bKash payment initiation route.
     * The BkashController will call the tokenized API and redirect to bKash.
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return route('shop.bkash.pay');
    }

    /**
     * Is available.
     *
     * @return bool
     */
    public function isAvailable()
    {
        if (! $this->cart) {
            $this->setCart();
        }

        return $this->getConfigData('active');
    }
}
