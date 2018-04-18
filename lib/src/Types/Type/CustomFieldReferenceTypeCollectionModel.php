<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomFieldReferenceTypeCollectionModel extends FieldTypeCollectionModel implements CustomFieldReferenceTypeCollection {

    /**
     * @param CustomFieldReferenceType $value
     * @return CustomFieldReferenceTypeCollection
     */
    public function add($value) {
        if (!$value instanceof CustomFieldReferenceType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomFieldReferenceType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomFieldReferenceType) {
            $data = $this->mapData(CustomFieldReferenceType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
