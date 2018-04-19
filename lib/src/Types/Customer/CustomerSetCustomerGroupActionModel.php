<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Customer\CustomerUpdateActionModel;

use Commercetools\Types\CustomerGroup\CustomerGroupReference;

class CustomerSetCustomerGroupActionModel extends CustomerUpdateActionModel implements CustomerSetCustomerGroupAction
{
    const DISCRIMINATOR_VALUE = 'setCustomerGroup';

    /**
     * @var CustomerGroupReference
     */
    protected $customerGroup;

    /**
     * @return CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            $value = $this->raw(CustomerSetCustomerGroupAction::FIELD_CUSTOMER_GROUP);
            if (is_null($value)) {
                return $this->mapData(CustomerGroupReference::class, null);
            }
            $value = $this->mapData(CustomerGroupReference::class, $value);

            $this->customerGroup = $value;
        }
        return $this->customerGroup;
    }

    /**
     * @param CustomerGroupReference $customerGroup
     * @return $this
     */
    public function setCustomerGroup(CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

}
