<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Order\OrderUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderUpdateActionCollection<OrderTransitionStateAction>
 * @method OrderTransitionStateAction current()
 * @method OrderTransitionStateAction end()
 * @method OrderTransitionStateAction at($offset)
 */
class OrderTransitionStateActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderTransitionStateAction $value
     * @psalm-param OrderTransitionStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderTransitionStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderTransitionStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderTransitionStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderTransitionStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderTransitionStateAction $data */
                $data = OrderTransitionStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
