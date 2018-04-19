<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomFieldLocalizedEnumTypeCollectionModel extends FieldTypeCollectionModel implements CustomFieldLocalizedEnumTypeCollection
{

    /**
     * @param CustomFieldLocalizedEnumType $value
     * @return CustomFieldLocalizedEnumTypeCollection
     */
    public function add($value) {
        if (!$value instanceof CustomFieldLocalizedEnumType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomFieldLocalizedEnumType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomFieldLocalizedEnumType) {
            $data = $this->mapData(CustomFieldLocalizedEnumType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
