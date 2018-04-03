<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class AttributeLocalizedEnumValueCollectionModel extends JsonCollection implements AttributeLocalizedEnumValueCollection {

    /**
     * @param AttributeLocalizedEnumValue $value
     * @return AttributeLocalizedEnumValueCollection
     */
    public function add($value) {
        if (!$value instanceof AttributeLocalizedEnumValue) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributeLocalizedEnumValue
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributeLocalizedEnumValue) {
            $data = $this->mapData(AttributeLocalizedEnumValue::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
