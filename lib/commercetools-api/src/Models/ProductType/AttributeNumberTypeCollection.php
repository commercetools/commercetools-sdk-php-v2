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
 * @extends AttributeTypeCollection<AttributeNumberType>
 * @method AttributeNumberType current()
 * @method AttributeNumberType at($offset)
 */
class AttributeNumberTypeCollection extends AttributeTypeCollection
{
    /**
     * @psalm-assert AttributeNumberType $value
     * @psalm-param AttributeNumberType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeNumberTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeNumberType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeNumberType
     */
    protected function mapper()
    {
        return function (int $index): ?AttributeNumberType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeNumberType $data */
                $data = AttributeNumberTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
