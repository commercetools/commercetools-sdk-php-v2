<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerSetKeyActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerSetKeyActionCollection {

    /**
     * @param CustomerSetKeyAction $value
     * @return CustomerSetKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSetKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSetKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSetKeyAction) {
            $data = $this->mapData(CustomerSetKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
