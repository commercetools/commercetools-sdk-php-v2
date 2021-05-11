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
 * @extends AttributeTypeCollection<AttributeTimeType>
 * @method AttributeTimeType current()
 * @method AttributeTimeType at($offset)
 */
class AttributeTimeTypeCollection extends AttributeTypeCollection
{
    /**
     * @psalm-assert AttributeTimeType $value
     * @psalm-param AttributeTimeType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeTimeTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeTimeType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeTimeType
     */
    protected function mapper()
    {
        return function (int $index): ?AttributeTimeType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeTimeType $data */
                $data = AttributeTimeTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
