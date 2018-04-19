<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerGroupUpdateCollectionModel extends UpdateCollectionModel implements CustomerGroupUpdateCollection
{

    /**
     * @param CustomerGroupUpdate $value
     * @return CustomerGroupUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerGroupUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerGroupUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerGroupUpdate) {
            $data = $this->mapData(CustomerGroupUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
