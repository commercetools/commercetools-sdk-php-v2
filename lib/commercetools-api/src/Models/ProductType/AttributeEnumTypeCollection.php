<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\ProductType\AttributeTypeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends AttributeTypeCollection<AttributeEnumType>
 * @method AttributeEnumType current()
 * @method AttributeEnumType end()
 * @method AttributeEnumType at($offset)
 */
class AttributeEnumTypeCollection extends AttributeTypeCollection
{
    /**
     * @psalm-assert AttributeEnumType $value
     * @psalm-param AttributeEnumType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeEnumTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeEnumType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeEnumType
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeEnumType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeEnumType $data */
                $data = AttributeEnumTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
