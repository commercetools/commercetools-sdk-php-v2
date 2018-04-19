<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerUpdateCollectionModel extends UpdateCollectionModel implements CustomerUpdateCollection
{

    /**
     * @param CustomerUpdate $value
     * @return CustomerUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerUpdate) {
            $data = $this->mapData(CustomerUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
