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
 * @extends MapperSequence<OrderTransitionCustomLineItemStateAction>
 *
 * @method OrderTransitionCustomLineItemStateAction current()
 * @method OrderTransitionCustomLineItemStateAction at($offset)
 */
class OrderTransitionCustomLineItemStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderTransitionCustomLineItemStateAction $value
     * @psalm-param OrderTransitionCustomLineItemStateAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderTransitionCustomLineItemStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderTransitionCustomLineItemStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderTransitionCustomLineItemStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderTransitionCustomLineItemStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderTransitionCustomLineItemStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
