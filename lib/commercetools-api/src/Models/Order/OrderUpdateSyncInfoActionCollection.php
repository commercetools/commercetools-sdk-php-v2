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
 * @extends OrderUpdateActionCollection<OrderUpdateSyncInfoAction>
 * @method OrderUpdateSyncInfoAction current()
 * @method OrderUpdateSyncInfoAction end()
 * @method OrderUpdateSyncInfoAction at($offset)
 */
class OrderUpdateSyncInfoActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderUpdateSyncInfoAction $value
     * @psalm-param OrderUpdateSyncInfoAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderUpdateSyncInfoActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderUpdateSyncInfoAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderUpdateSyncInfoAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderUpdateSyncInfoAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderUpdateSyncInfoAction $data */
                $data = OrderUpdateSyncInfoActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
