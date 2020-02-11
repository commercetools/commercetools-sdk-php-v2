<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AttributeDateTimeType>
 * @method AttributeDateTimeType current()
 * @method AttributeDateTimeType at($offset)
 */
class AttributeDateTimeTypeCollection extends MapperSequence
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
        return function (int $index): ?AttributeDateTimeType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AttributeDateTimeTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
