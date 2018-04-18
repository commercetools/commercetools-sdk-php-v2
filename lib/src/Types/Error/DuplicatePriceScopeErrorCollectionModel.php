<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DuplicatePriceScopeErrorCollectionModel extends ErrorObjectCollectionModel implements DuplicatePriceScopeErrorCollection {

    /**
     * @param DuplicatePriceScopeError $value
     * @return DuplicatePriceScopeErrorCollection
     */
    public function add($value) {
        if (!$value instanceof DuplicatePriceScopeError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DuplicatePriceScopeError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DuplicatePriceScopeError) {
            $data = $this->mapData(DuplicatePriceScopeError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
