<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomFieldDateTimeTypeCollectionModel extends FieldTypeCollectionModel implements CustomFieldDateTimeTypeCollection
{

    /**
     * @param CustomFieldDateTimeType $value
     * @return CustomFieldDateTimeTypeCollection
     */
    public function add($value) {
        if (!$value instanceof CustomFieldDateTimeType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomFieldDateTimeType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomFieldDateTimeType) {
            $data = $this->mapData(CustomFieldDateTimeType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
