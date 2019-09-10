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
 * @extends MapperSequence<Type>
 *
 * @method Type current()
 * @method Type at($offset)
 */
class TypeCollection extends MapperSequence
{
    /**
     * @psalm-assert Type $value
     * @psalm-param Type|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return TypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof Type) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Type
     */
    protected function mapper()
    {
        return function (int $index): ?Type {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
