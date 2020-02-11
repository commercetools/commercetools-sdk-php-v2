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
 * @extends MapperSequence<OrderTransitionLineItemStateAction>
 * @method OrderTransitionLineItemStateAction current()
 * @method OrderTransitionLineItemStateAction at($offset)
 */
class OrderTransitionLineItemStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderTransitionLineItemStateAction $value
     * @psalm-param OrderTransitionLineItemStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderTransitionLineItemStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderTransitionLineItemStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderTransitionLineItemStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderTransitionLineItemStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderTransitionLineItemStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
