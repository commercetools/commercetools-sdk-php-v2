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
 * @extends MapperSequence<ChangeValueChangeValue>
 * @method ChangeValueChangeValue current()
 * @method ChangeValueChangeValue at($offset)
 */
class ChangeValueChangeValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeValueChangeValue $value
     * @psalm-param ChangeValueChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeValueChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeValueChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeValueChangeValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeValueChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeValueChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
