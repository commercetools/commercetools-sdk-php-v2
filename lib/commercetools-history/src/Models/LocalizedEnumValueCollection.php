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
 * @extends MapperSequence<LocalizedEnumValue>
 * @method LocalizedEnumValue current()
 * @method LocalizedEnumValue at($offset)
 */
class LocalizedEnumValueCollection extends MapperSequence
{
    /**
     * @psalm-assert LocalizedEnumValue $value
     * @psalm-param LocalizedEnumValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LocalizedEnumValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof LocalizedEnumValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LocalizedEnumValue
     */
    protected function mapper()
    {
        return function (int $index): ?LocalizedEnumValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = LocalizedEnumValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
