<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomFieldDateTypeCollectionModel extends FieldTypeCollectionModel implements CustomFieldDateTypeCollection {

    /**
     * @param CustomFieldDateType $value
     * @return CustomFieldDateTypeCollection
     */
    public function add($value) {
        if (!$value instanceof CustomFieldDateType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomFieldDateType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomFieldDateType) {
            $data = $this->mapData(CustomFieldDateType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
