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
 * @extends MapperSequence<AttributeBooleanType>
 * @method AttributeBooleanType current()
 * @method AttributeBooleanType at($offset)
 */
class AttributeBooleanTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeBooleanType $value
     * @psalm-param AttributeBooleanType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeBooleanTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeBooleanType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeBooleanType
     */
    protected function mapper()
    {
        return function (int $index): ?AttributeBooleanType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AttributeBooleanTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
