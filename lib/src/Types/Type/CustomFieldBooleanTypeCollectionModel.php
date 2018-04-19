<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomFieldBooleanTypeCollectionModel extends FieldTypeCollectionModel implements CustomFieldBooleanTypeCollection
{

    /**
     * @param CustomFieldBooleanType $value
     * @return CustomFieldBooleanTypeCollection
     */
    public function add($value) {
        if (!$value instanceof CustomFieldBooleanType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomFieldBooleanType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomFieldBooleanType) {
            $data = $this->mapData(CustomFieldBooleanType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
