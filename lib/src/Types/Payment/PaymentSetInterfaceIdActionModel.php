<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Payment\PaymentUpdateActionModel;

class PaymentSetInterfaceIdActionModel extends PaymentUpdateActionModel implements PaymentSetInterfaceIdAction {
    const DISCRIMINATOR_VALUE = 'setInterfaceId';

    /**
     * @var string
     */
    protected $interfaceId;

    /**
     * @return string
     */
    public function getInterfaceId()
    {
        if (is_null($this->interfaceId)) {
            $value = $this->raw(PaymentSetInterfaceIdAction::FIELD_INTERFACE_ID);
            $value = (string)$value;
            $this->interfaceId = $value;
        }
        return $this->interfaceId;
    }

    /**
     * @param string $interfaceId
     * @return $this
     */
    public function setInterfaceId(string $interfaceId)
    {
        $this->interfaceId = (string)$interfaceId;

        return $this;
    }

}
