<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerRemoveBillingAddressIdActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerRemoveBillingAddressIdActionCollection
{

    /**
     * @param CustomerRemoveBillingAddressIdAction $value
     * @return CustomerRemoveBillingAddressIdActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerRemoveBillingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerRemoveBillingAddressIdAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerRemoveBillingAddressIdAction) {
            $data = $this->mapData(CustomerRemoveBillingAddressIdAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
