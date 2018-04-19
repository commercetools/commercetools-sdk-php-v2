<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerAddShippingAddressIdActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerAddShippingAddressIdActionCollection
{

    /**
     * @param CustomerAddShippingAddressIdAction $value
     * @return CustomerAddShippingAddressIdActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerAddShippingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerAddShippingAddressIdAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerAddShippingAddressIdAction) {
            $data = $this->mapData(CustomerAddShippingAddressIdAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
