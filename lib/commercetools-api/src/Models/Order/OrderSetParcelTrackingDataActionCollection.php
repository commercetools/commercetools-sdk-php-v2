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
 * @extends OrderUpdateActionCollection<OrderSetParcelTrackingDataAction>
 * @method OrderSetParcelTrackingDataAction current()
 * @method OrderSetParcelTrackingDataAction at($offset)
 */
class OrderSetParcelTrackingDataActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetParcelTrackingDataAction $value
     * @psalm-param OrderSetParcelTrackingDataAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetParcelTrackingDataActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetParcelTrackingDataAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetParcelTrackingDataAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetParcelTrackingDataAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetParcelTrackingDataAction $data */
                $data = OrderSetParcelTrackingDataActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
