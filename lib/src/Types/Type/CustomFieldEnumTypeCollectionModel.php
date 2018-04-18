<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomFieldEnumTypeCollectionModel extends FieldTypeCollectionModel implements CustomFieldEnumTypeCollection {

    /**
     * @param CustomFieldEnumType $value
     * @return CustomFieldEnumTypeCollection
     */
    public function add($value) {
        if (!$value instanceof CustomFieldEnumType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomFieldEnumType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomFieldEnumType) {
            $data = $this->mapData(CustomFieldEnumType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
