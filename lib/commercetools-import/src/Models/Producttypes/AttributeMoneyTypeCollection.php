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
 * @extends MapperSequence<AttributeMoneyType>
 * @method AttributeMoneyType current()
 * @method AttributeMoneyType at($offset)
 */
class AttributeMoneyTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeMoneyType $value
     * @psalm-param AttributeMoneyType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeMoneyTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeMoneyType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeMoneyType
     */
    protected function mapper()
    {
        return function (int $index): ?AttributeMoneyType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AttributeMoneyTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
