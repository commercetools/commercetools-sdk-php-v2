<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Customer\CustomerUpdateActionModel;

class CustomerSetDefaultShippingAddressActionModel extends CustomerUpdateActionModel implements CustomerSetDefaultShippingAddressAction
{
    const DISCRIMINATOR_VALUE = 'setDefaultShippingAddress';

    /**
     * @var string
     */
    protected $addressId;

    /**
     * @return string
     */
    public function getAddressId()
    {
        if (is_null($this->addressId)) {
            $value = $this->raw(CustomerSetDefaultShippingAddressAction::FIELD_ADDRESS_ID);
            $value = (string)$value;
            $this->addressId = $value;
        }
        return $this->addressId;
    }

    /**
     * @param string $addressId
     * @return $this
     */
    public function setAddressId(string $addressId)
    {
        $this->addressId = (string)$addressId;

        return $this;
    }

}
