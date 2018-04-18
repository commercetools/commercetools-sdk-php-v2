<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerSetDefaultBillingAddressActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerSetDefaultBillingAddressActionCollection {

    /**
     * @param CustomerSetDefaultBillingAddressAction $value
     * @return CustomerSetDefaultBillingAddressActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSetDefaultBillingAddressAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSetDefaultBillingAddressAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSetDefaultBillingAddressAction) {
            $data = $this->mapData(CustomerSetDefaultBillingAddressAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
