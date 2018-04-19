<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Cart\CartUpdateActionModel;

use Commercetools\Types\Payment\PaymentReference;

class CartAddPaymentActionModel extends CartUpdateActionModel implements CartAddPaymentAction
{
    const DISCRIMINATOR_VALUE = 'addPayment';

    /**
     * @var PaymentReference
     */
    protected $payment;

    /**
     * @return PaymentReference
     */
    public function getPayment()
    {
        if (is_null($this->payment)) {
            $value = $this->raw(CartAddPaymentAction::FIELD_PAYMENT);
            if (is_null($value)) {
                return $this->mapData(PaymentReference::class, null);
            }
            $value = $this->mapData(PaymentReference::class, $value);

            $this->payment = $value;
        }
        return $this->payment;
    }

    /**
     * @param PaymentReference $payment
     * @return $this
     */
    public function setPayment(PaymentReference $payment)
    {
        $this->payment = $payment;

        return $this;
    }

}
