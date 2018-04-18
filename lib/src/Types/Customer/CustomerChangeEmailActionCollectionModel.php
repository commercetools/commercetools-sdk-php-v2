<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerChangeEmailActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerChangeEmailActionCollection {

    /**
     * @param CustomerChangeEmailAction $value
     * @return CustomerChangeEmailActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerChangeEmailAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerChangeEmailAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerChangeEmailAction) {
            $data = $this->mapData(CustomerChangeEmailAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
