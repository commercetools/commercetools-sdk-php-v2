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
 * @extends MapperSequence<AttributeReferenceType>
 * @method AttributeReferenceType current()
 * @method AttributeReferenceType at($offset)
 */
class AttributeReferenceTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeReferenceType $value
     * @psalm-param AttributeReferenceType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeReferenceTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeReferenceType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeReferenceType
     */
    protected function mapper()
    {
        return function (int $index): ?AttributeReferenceType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AttributeReferenceTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
