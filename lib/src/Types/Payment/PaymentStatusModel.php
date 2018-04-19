<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\State\StateReference;

class PaymentStatusModel extends JsonObjectModel implements PaymentStatus
{
    /**
     * @var string
     */
    protected $interfaceCode;
    /**
     * @var string
     */
    protected $interfaceText;
    /**
     * @var StateReference
     */
    protected $state;

    /**
     * @return string
     */
    public function getInterfaceCode()
    {
        if (is_null($this->interfaceCode)) {
            $value = $this->raw(PaymentStatus::FIELD_INTERFACE_CODE);
            $value = (string)$value;
            $this->interfaceCode = $value;
        }
        return $this->interfaceCode;
    }
    /**
     * @return string
     */
    public function getInterfaceText()
    {
        if (is_null($this->interfaceText)) {
            $value = $this->raw(PaymentStatus::FIELD_INTERFACE_TEXT);
            $value = (string)$value;
            $this->interfaceText = $value;
        }
        return $this->interfaceText;
    }
    /**
     * @return StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(PaymentStatus::FIELD_STATE);
            if (is_null($value)) {
                return $this->mapData(StateReference::class, null);
            }
            $value = $this->mapData(StateReference::class, $value);

            $this->state = $value;
        }
        return $this->state;
    }

    /**
     * @param string $interfaceCode
     * @return $this
     */
    public function setInterfaceCode(string $interfaceCode)
    {
        $this->interfaceCode = (string)$interfaceCode;

        return $this;
    }
    /**
     * @param string $interfaceText
     * @return $this
     */
    public function setInterfaceText(string $interfaceText)
    {
        $this->interfaceText = (string)$interfaceText;

        return $this;
    }
    /**
     * @param StateReference $state
     * @return $this
     */
    public function setState(StateReference $state)
    {
        $this->state = $state;

        return $this;
    }

}
