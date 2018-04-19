<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerGroupReferenceCollectionModel extends ReferenceCollectionModel implements CustomerGroupReferenceCollection
{

    /**
     * @param CustomerGroupReference $value
     * @return CustomerGroupReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerGroupReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerGroupReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerGroupReference) {
            $data = $this->mapData(CustomerGroupReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
