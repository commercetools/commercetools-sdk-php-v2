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
 * @extends OrderUpdateActionCollection<OrderSetPurchaseOrderNumberAction>
 * @method OrderSetPurchaseOrderNumberAction current()
 * @method OrderSetPurchaseOrderNumberAction end()
 * @method OrderSetPurchaseOrderNumberAction at($offset)
 */
class OrderSetPurchaseOrderNumberActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetPurchaseOrderNumberAction $value
     * @psalm-param OrderSetPurchaseOrderNumberAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetPurchaseOrderNumberActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetPurchaseOrderNumberAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetPurchaseOrderNumberAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetPurchaseOrderNumberAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetPurchaseOrderNumberAction $data */
                $data = OrderSetPurchaseOrderNumberActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
