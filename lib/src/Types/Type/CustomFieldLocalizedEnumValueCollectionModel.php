<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CustomFieldLocalizedEnumValueCollectionModel extends JsonCollection implements CustomFieldLocalizedEnumValueCollection {

    /**
     * @param CustomFieldLocalizedEnumValue $value
     * @return CustomFieldLocalizedEnumValueCollection
     */
    public function add($value) {
        if (!$value instanceof CustomFieldLocalizedEnumValue) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomFieldLocalizedEnumValue
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomFieldLocalizedEnumValue) {
            $data = $this->mapData(CustomFieldLocalizedEnumValue::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
