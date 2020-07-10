<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Common;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TypeKeyReference>
 * @method TypeKeyReference current()
 * @method TypeKeyReference at($offset)
 */
class TypeKeyReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeKeyReference $value
     * @psalm-param TypeKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeKeyReference
     */
    protected function mapper()
    {
        return function (int $index): ?TypeKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypeKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
