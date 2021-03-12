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
 * @extends MapperSequence<ChangeValueAbsoluteActionValue>
 * @method ChangeValueAbsoluteActionValue current()
 * @method ChangeValueAbsoluteActionValue at($offset)
 */
class ChangeValueAbsoluteActionValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeValueAbsoluteActionValue $value
     * @psalm-param ChangeValueAbsoluteActionValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeValueAbsoluteActionValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeValueAbsoluteActionValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeValueAbsoluteActionValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeValueAbsoluteActionValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeValueAbsoluteActionValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
