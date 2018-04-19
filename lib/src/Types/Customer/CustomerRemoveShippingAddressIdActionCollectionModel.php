<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerRemoveShippingAddressIdActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerRemoveShippingAddressIdActionCollection
{

    /**
     * @param CustomerRemoveShippingAddressIdAction $value
     * @return CustomerRemoveShippingAddressIdActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerRemoveShippingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerRemoveShippingAddressIdAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerRemoveShippingAddressIdAction) {
            $data = $this->mapData(CustomerRemoveShippingAddressIdAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
