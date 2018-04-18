<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerRemoveAddressActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerRemoveAddressActionCollection {

    /**
     * @param CustomerRemoveAddressAction $value
     * @return CustomerRemoveAddressActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerRemoveAddressAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerRemoveAddressAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerRemoveAddressAction) {
            $data = $this->mapData(CustomerRemoveAddressAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
