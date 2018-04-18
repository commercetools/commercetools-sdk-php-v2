<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DuplicateAttributeValueErrorCollectionModel extends ErrorObjectCollectionModel implements DuplicateAttributeValueErrorCollection {

    /**
     * @param DuplicateAttributeValueError $value
     * @return DuplicateAttributeValueErrorCollection
     */
    public function add($value) {
        if (!$value instanceof DuplicateAttributeValueError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DuplicateAttributeValueError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DuplicateAttributeValueError) {
            $data = $this->mapData(DuplicateAttributeValueError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
