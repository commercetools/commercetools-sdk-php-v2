<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\CustomerGroup\CustomerGroupReference;

class CustomerGroupSetMessageModel extends MessageModel implements CustomerGroupSetMessage
{
    const DISCRIMINATOR_VALUE = 'CustomerGroupSet';

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
            $value = $this->raw(CustomerGroupSetMessage::FIELD_CUSTOMER_GROUP);
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
