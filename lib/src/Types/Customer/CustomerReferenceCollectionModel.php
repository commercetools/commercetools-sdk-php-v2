<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerReferenceCollectionModel extends ReferenceCollectionModel implements CustomerReferenceCollection {

    /**
     * @param CustomerReference $value
     * @return CustomerReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerReference) {
            $data = $this->mapData(CustomerReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
