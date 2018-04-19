<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Types\CustomerGroup\CustomerGroupUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerGroupSetKeyActionCollectionModel extends CustomerGroupUpdateActionCollectionModel implements CustomerGroupSetKeyActionCollection
{

    /**
     * @param CustomerGroupSetKeyAction $value
     * @return CustomerGroupSetKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerGroupSetKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerGroupSetKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerGroupSetKeyAction) {
            $data = $this->mapData(CustomerGroupSetKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
