<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomFieldNumberTypeCollectionModel extends FieldTypeCollectionModel implements CustomFieldNumberTypeCollection {

    /**
     * @param CustomFieldNumberType $value
     * @return CustomFieldNumberTypeCollection
     */
    public function add($value) {
        if (!$value instanceof CustomFieldNumberType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomFieldNumberType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomFieldNumberType) {
            $data = $this->mapData(CustomFieldNumberType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
