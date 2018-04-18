<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class AttributeTypeCollectionModel extends JsonCollection implements AttributeTypeCollection {

    /**
     * @param AttributeType $value
     * @return AttributeTypeCollection
     */
    public function add($value) {
        if (!$value instanceof AttributeType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributeType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributeType) {
            $resolvedClass = $this->resolveDiscriminator(AttributeType::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
