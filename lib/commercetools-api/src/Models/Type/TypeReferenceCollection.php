<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TypeReference>
 * @method TypeReference current()
 * @method TypeReference at($offset)
 */
class TypeReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeReference $value
     * @psalm-param TypeReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeReference
     */
    protected function mapper()
    {
        return function (int $index): ?TypeReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypeReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
