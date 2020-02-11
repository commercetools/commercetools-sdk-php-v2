<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderSetReturnPaymentStateAction>
 * @method OrderSetReturnPaymentStateAction current()
 * @method OrderSetReturnPaymentStateAction at($offset)
 */
class OrderSetReturnPaymentStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetReturnPaymentStateAction $value
     * @psalm-param OrderSetReturnPaymentStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetReturnPaymentStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetReturnPaymentStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetReturnPaymentStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetReturnPaymentStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetReturnPaymentStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
