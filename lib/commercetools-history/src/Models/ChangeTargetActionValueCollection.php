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
 * @extends MapperSequence<ChangeTargetActionValue>
 * @method ChangeTargetActionValue current()
 * @method ChangeTargetActionValue at($offset)
 */
class ChangeTargetActionValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTargetActionValue $value
     * @psalm-param ChangeTargetActionValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTargetActionValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTargetActionValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTargetActionValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTargetActionValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTargetActionValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
