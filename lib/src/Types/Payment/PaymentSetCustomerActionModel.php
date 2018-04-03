<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Payment\PaymentUpdateActionModel;

use Commercetools\Types\Customer\CustomerReference;

class PaymentSetCustomerActionModel extends PaymentUpdateActionModel implements PaymentSetCustomerAction {
    const DISCRIMINATOR_VALUE = 'setCustomer';

    /**
     * @var CustomerReference
     */
    protected $customer;

    /**
     * @return CustomerReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            $value = $this->raw(PaymentSetCustomerAction::FIELD_CUSTOMER);
            if (is_null($value)) {
                return $this->mapData(CustomerReference::class, null);
            }
            $value = $this->mapData(CustomerReference::class, $value);

            $this->customer = $value;
        }
        return $this->customer;
    }

    /**
     * @param CustomerReference $customer
     * @return $this
     */
    public function setCustomer(CustomerReference $customer)
    {
        $this->customer = $customer;

        return $this;
    }

}
