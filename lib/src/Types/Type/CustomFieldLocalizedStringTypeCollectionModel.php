<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomFieldLocalizedStringTypeCollectionModel extends FieldTypeCollectionModel implements CustomFieldLocalizedStringTypeCollection {

    /**
     * @param CustomFieldLocalizedStringType $value
     * @return CustomFieldLocalizedStringTypeCollection
     */
    public function add($value) {
        if (!$value instanceof CustomFieldLocalizedStringType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomFieldLocalizedStringType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomFieldLocalizedStringType) {
            $data = $this->mapData(CustomFieldLocalizedStringType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
