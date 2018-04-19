<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerChangeAddressActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerChangeAddressActionCollection
{

    /**
     * @param CustomerChangeAddressAction $value
     * @return CustomerChangeAddressActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerChangeAddressAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerChangeAddressAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerChangeAddressAction) {
            $data = $this->mapData(CustomerChangeAddressAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
