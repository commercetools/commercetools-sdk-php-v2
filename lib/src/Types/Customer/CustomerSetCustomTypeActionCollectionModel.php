<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerSetCustomTypeActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerSetCustomTypeActionCollection
{

    /**
     * @param CustomerSetCustomTypeAction $value
     * @return CustomerSetCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSetCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSetCustomTypeAction) {
            $data = $this->mapData(CustomerSetCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
