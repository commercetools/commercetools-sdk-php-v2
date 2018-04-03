<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Customer\CustomerUpdateActionModel;

class CustomerSetCustomerNumberActionModel extends CustomerUpdateActionModel implements CustomerSetCustomerNumberAction {
    const DISCRIMINATOR_VALUE = 'setCustomerNumber';

    /**
     * @var string
     */
    protected $customerNumber;

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
        if (is_null($this->customerNumber)) {
            $value = $this->raw(CustomerSetCustomerNumberAction::FIELD_CUSTOMER_NUMBER);
            $value = (string)$value;
            $this->customerNumber = $value;
        }
        return $this->customerNumber;
    }

    /**
     * @param string $customerNumber
     * @return $this
     */
    public function setCustomerNumber(string $customerNumber)
    {
        $this->customerNumber = (string)$customerNumber;

        return $this;
    }

}
