<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeValueAbsoluteChangeValue>
 * @method ChangeValueAbsoluteChangeValue current()
 * @method ChangeValueAbsoluteChangeValue at($offset)
 */
class ChangeValueAbsoluteChangeValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeValueAbsoluteChangeValue $value
     * @psalm-param ChangeValueAbsoluteChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeValueAbsoluteChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeValueAbsoluteChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeValueAbsoluteChangeValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeValueAbsoluteChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeValueAbsoluteChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
