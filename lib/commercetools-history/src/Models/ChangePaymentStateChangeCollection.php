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
 * @extends MapperSequence<ChangePaymentStateChange>
 * @method ChangePaymentStateChange current()
 * @method ChangePaymentStateChange at($offset)
 */
class ChangePaymentStateChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangePaymentStateChange $value
     * @psalm-param ChangePaymentStateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangePaymentStateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangePaymentStateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangePaymentStateChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangePaymentStateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangePaymentStateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
