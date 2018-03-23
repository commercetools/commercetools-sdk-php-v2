<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\JsonCollection;

class AttributePlainEnumValueCollectionModel extends JsonCollection implements AttributePlainEnumValueCollection {

    /**
     * @param AttributePlainEnumValue $value
     * @return AttributePlainEnumValueCollection
     */
    public function add($value) {
        if (!$value instanceof AttributePlainEnumValue) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributePlainEnumValue
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributePlainEnumValue) {
            $data = $this->mapData(AttributePlainEnumValue::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
