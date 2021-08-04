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
 * @extends OrderUpdateActionCollection<OrderAddParcelToDeliveryAction>
 * @method OrderAddParcelToDeliveryAction current()
 * @method OrderAddParcelToDeliveryAction at($offset)
 */
class OrderAddParcelToDeliveryActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderAddParcelToDeliveryAction $value
     * @psalm-param OrderAddParcelToDeliveryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderAddParcelToDeliveryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderAddParcelToDeliveryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderAddParcelToDeliveryAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderAddParcelToDeliveryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderAddParcelToDeliveryAction $data */
                $data = OrderAddParcelToDeliveryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
