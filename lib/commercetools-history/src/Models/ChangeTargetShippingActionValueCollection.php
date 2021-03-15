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
 * @extends MapperSequence<ChangeTargetShippingActionValue>
 * @method ChangeTargetShippingActionValue current()
 * @method ChangeTargetShippingActionValue at($offset)
 */
class ChangeTargetShippingActionValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTargetShippingActionValue $value
     * @psalm-param ChangeTargetShippingActionValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTargetShippingActionValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTargetShippingActionValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTargetShippingActionValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTargetShippingActionValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTargetShippingActionValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
