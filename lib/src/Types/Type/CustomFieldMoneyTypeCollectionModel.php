<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomFieldMoneyTypeCollectionModel extends FieldTypeCollectionModel implements CustomFieldMoneyTypeCollection {

    /**
     * @param CustomFieldMoneyType $value
     * @return CustomFieldMoneyTypeCollection
     */
    public function add($value) {
        if (!$value instanceof CustomFieldMoneyType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomFieldMoneyType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomFieldMoneyType) {
            $data = $this->mapData(CustomFieldMoneyType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
