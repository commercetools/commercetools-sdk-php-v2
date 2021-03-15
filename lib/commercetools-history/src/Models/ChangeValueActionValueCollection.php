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
 * @extends MapperSequence<ChangeValueActionValue>
 * @method ChangeValueActionValue current()
 * @method ChangeValueActionValue at($offset)
 */
class ChangeValueActionValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeValueActionValue $value
     * @psalm-param ChangeValueActionValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeValueActionValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeValueActionValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeValueActionValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeValueActionValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeValueActionValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
