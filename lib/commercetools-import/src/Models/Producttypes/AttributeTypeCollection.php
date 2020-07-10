<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Producttypes;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AttributeType>
 * @method AttributeType current()
 * @method AttributeType at($offset)
 */
class AttributeTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeType $value
     * @psalm-param AttributeType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeType
     */
    protected function mapper()
    {
        return function (int $index): ?AttributeType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AttributeTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
