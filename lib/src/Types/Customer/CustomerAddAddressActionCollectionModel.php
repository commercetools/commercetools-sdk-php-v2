<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerAddAddressActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerAddAddressActionCollection {

    /**
     * @param CustomerAddAddressAction $value
     * @return CustomerAddAddressActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerAddAddressAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerAddAddressAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerAddAddressAction) {
            $data = $this->mapData(CustomerAddAddressAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
