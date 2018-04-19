<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Payment\PaymentUpdateActionModel;

class PaymentSetMethodInfoMethodActionModel extends PaymentUpdateActionModel implements PaymentSetMethodInfoMethodAction
{
    const DISCRIMINATOR_VALUE = 'setMethodInfoMethod';

    /**
     * @var string
     */
    protected $method;

    /**
     * @return string
     */
    public function getMethod()
    {
        if (is_null($this->method)) {
            $value = $this->raw(PaymentSetMethodInfoMethodAction::FIELD_METHOD);
            $value = (string)$value;
            $this->method = $value;
        }
        return $this->method;
    }

    /**
     * @param string $method
     * @return $this
     */
    public function setMethod(string $method)
    {
        $this->method = (string)$method;

        return $this;
    }

}
