<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomFieldSetTypeCollectionModel extends FieldTypeCollectionModel implements CustomFieldSetTypeCollection
{

    /**
     * @param CustomFieldSetType $value
     * @return CustomFieldSetTypeCollection
     */
    public function add($value) {
        if (!$value instanceof CustomFieldSetType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomFieldSetType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomFieldSetType) {
            $data = $this->mapData(CustomFieldSetType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
