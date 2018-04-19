<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Cart\CartUpdateActionModel;

class CartSetCustomerIdActionModel extends CartUpdateActionModel implements CartSetCustomerIdAction
{
    const DISCRIMINATOR_VALUE = 'setCustomerId';

    /**
     * @var string
     */
    protected $customerId;

    /**
     * @return string
     */
    public function getCustomerId()
    {
        if (is_null($this->customerId)) {
            $value = $this->raw(CartSetCustomerIdAction::FIELD_CUSTOMER_ID);
            $value = (string)$value;
            $this->customerId = $value;
        }
        return $this->customerId;
    }

    /**
     * @param string $customerId
     * @return $this
     */
    public function setCustomerId(string $customerId)
    {
        $this->customerId = (string)$customerId;

        return $this;
    }

}
