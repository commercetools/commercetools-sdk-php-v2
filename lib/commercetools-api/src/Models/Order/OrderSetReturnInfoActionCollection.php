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
 * @extends OrderUpdateActionCollection<OrderSetReturnInfoAction>
 * @method OrderSetReturnInfoAction current()
 * @method OrderSetReturnInfoAction end()
 * @method OrderSetReturnInfoAction at($offset)
 */
class OrderSetReturnInfoActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetReturnInfoAction $value
     * @psalm-param OrderSetReturnInfoAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetReturnInfoActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetReturnInfoAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetReturnInfoAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetReturnInfoAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetReturnInfoAction $data */
                $data = OrderSetReturnInfoActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
