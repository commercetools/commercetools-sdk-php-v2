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
 * @extends AttributeTypeCollection<AttributeDateTimeType>
 * @method AttributeDateTimeType current()
 * @method AttributeDateTimeType end()
 * @method AttributeDateTimeType at($offset)
 */
class AttributeDateTimeTypeCollection extends AttributeTypeCollection
{
    /**
     * @psalm-assert AttributeDateTimeType $value
     * @psalm-param AttributeDateTimeType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeDateTimeTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeDateTimeType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeDateTimeType
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeDateTimeType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeDateTimeType $data */
                $data = AttributeDateTimeTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
