<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<EnumValue>
 * @method EnumValue current()
 * @method EnumValue at($offset)
 */
class EnumValueCollection extends MapperSequence
{
    /**
     * @psalm-assert EnumValue $value
     * @psalm-param EnumValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return EnumValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof EnumValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EnumValue
     */
    protected function mapper()
    {
        return function (int $index): ?EnumValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = EnumValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
