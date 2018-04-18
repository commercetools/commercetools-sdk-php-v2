<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class FieldTypeCollectionModel extends JsonCollection implements FieldTypeCollection {

    /**
     * @param FieldType $value
     * @return FieldTypeCollection
     */
    public function add($value) {
        if (!$value instanceof FieldType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return FieldType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof FieldType) {
            $resolvedClass = $this->resolveDiscriminator(FieldType::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
