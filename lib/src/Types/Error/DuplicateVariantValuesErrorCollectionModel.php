<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DuplicateVariantValuesErrorCollectionModel extends ErrorObjectCollectionModel implements DuplicateVariantValuesErrorCollection {

    /**
     * @param DuplicateVariantValuesError $value
     * @return DuplicateVariantValuesErrorCollection
     */
    public function add($value) {
        if (!$value instanceof DuplicateVariantValuesError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DuplicateVariantValuesError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DuplicateVariantValuesError) {
            $data = $this->mapData(DuplicateVariantValuesError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
