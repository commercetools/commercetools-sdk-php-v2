<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\LocalizedString;

class PaymentMethodInfoModel extends JsonObjectModel implements PaymentMethodInfo {
    /**
     * @var string
     */
    protected $paymentInterface;
    /**
     * @var string
     */
    protected $method;
    /**
     * @var LocalizedString
     */
    protected $name;

    /**
     * @return string
     */
    public function getPaymentInterface()
    {
        if (is_null($this->paymentInterface)) {
            $value = $this->raw(PaymentMethodInfo::FIELD_PAYMENT_INTERFACE);
            $value = (string)$value;
            $this->paymentInterface = $value;
        }
        return $this->paymentInterface;
    }
    /**
     * @return string
     */
    public function getMethod()
    {
        if (is_null($this->method)) {
            $value = $this->raw(PaymentMethodInfo::FIELD_METHOD);
            $value = (string)$value;
            $this->method = $value;
        }
        return $this->method;
    }
    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(PaymentMethodInfo::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }

    /**
     * @param string $paymentInterface
     * @return $this
     */
    public function setPaymentInterface(string $paymentInterface)
    {
        $this->paymentInterface = (string)$paymentInterface;

        return $this;
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
    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

}
