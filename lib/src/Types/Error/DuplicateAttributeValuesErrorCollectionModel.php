<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DuplicateAttributeValuesErrorCollectionModel extends ErrorObjectCollectionModel implements DuplicateAttributeValuesErrorCollection {

    /**
     * @param DuplicateAttributeValuesError $value
     * @return DuplicateAttributeValuesErrorCollection
     */
    public function add($value) {
        if (!$value instanceof DuplicateAttributeValuesError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DuplicateAttributeValuesError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DuplicateAttributeValuesError) {
            $data = $this->mapData(DuplicateAttributeValuesError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
