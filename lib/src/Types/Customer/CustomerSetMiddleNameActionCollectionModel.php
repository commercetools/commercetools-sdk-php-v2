<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerSetMiddleNameActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerSetMiddleNameActionCollection {

    /**
     * @param CustomerSetMiddleNameAction $value
     * @return CustomerSetMiddleNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSetMiddleNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSetMiddleNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSetMiddleNameAction) {
            $data = $this->mapData(CustomerSetMiddleNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
