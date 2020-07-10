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
 * @extends MapperSequence<AttributePlainEnumValue>
 * @method AttributePlainEnumValue current()
 * @method AttributePlainEnumValue at($offset)
 */
class AttributePlainEnumValueCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributePlainEnumValue $value
     * @psalm-param AttributePlainEnumValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributePlainEnumValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributePlainEnumValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributePlainEnumValue
     */
    protected function mapper()
    {
        return function (int $index): ?AttributePlainEnumValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AttributePlainEnumValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
