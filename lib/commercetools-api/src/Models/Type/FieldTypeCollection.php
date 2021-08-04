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
 * @template T of FieldType
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method FieldType current()
 * @method FieldType end()
 * @method FieldType at($offset)
 */
class FieldTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return FieldTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof FieldType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?FieldType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = FieldTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
