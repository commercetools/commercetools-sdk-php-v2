<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Customer\CustomerUpdateActionModel;

class CustomerSetDefaultBillingAddressActionModel extends CustomerUpdateActionModel implements CustomerSetDefaultBillingAddressAction {
    const DISCRIMINATOR_VALUE = 'setDefaultBillingAddress';

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
            $value = $this->raw(CustomerSetDefaultBillingAddressAction::FIELD_ADDRESS_ID);
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
