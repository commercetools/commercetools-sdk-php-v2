<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerAddBillingAddressIdActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerAddBillingAddressIdActionCollection
{

    /**
     * @param CustomerAddBillingAddressIdAction $value
     * @return CustomerAddBillingAddressIdActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerAddBillingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerAddBillingAddressIdAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerAddBillingAddressIdAction) {
            $data = $this->mapData(CustomerAddBillingAddressIdAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
