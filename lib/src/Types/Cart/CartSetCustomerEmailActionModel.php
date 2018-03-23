<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionModel;

class CartSetCustomerEmailActionModel extends CartUpdateActionModel implements CartSetCustomerEmailAction {
    const DISCRIMINATOR_VALUE = 'setCustomerEmail';

    /**
     * @var string
     */
    protected $email;

    /**
     * @return string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            $value = $this->raw(CartSetCustomerEmailAction::FIELD_EMAIL);
            $value = (string)$value;
            $this->email = $value;
        }
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email)
    {
        $this->email = (string)$email;

        return $this;
    }

}
