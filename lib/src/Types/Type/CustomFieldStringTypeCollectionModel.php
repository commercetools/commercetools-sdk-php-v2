<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomFieldStringTypeCollectionModel extends FieldTypeCollectionModel implements CustomFieldStringTypeCollection {

    /**
     * @param CustomFieldStringType $value
     * @return CustomFieldStringTypeCollection
     */
    public function add($value) {
        if (!$value instanceof CustomFieldStringType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomFieldStringType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomFieldStringType) {
            $data = $this->mapData(CustomFieldStringType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
