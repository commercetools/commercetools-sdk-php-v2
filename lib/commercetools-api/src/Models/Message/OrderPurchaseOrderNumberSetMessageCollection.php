<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessageCollection<OrderPurchaseOrderNumberSetMessage>
 * @method OrderPurchaseOrderNumberSetMessage current()
 * @method OrderPurchaseOrderNumberSetMessage end()
 * @method OrderPurchaseOrderNumberSetMessage at($offset)
 */
class OrderPurchaseOrderNumberSetMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderPurchaseOrderNumberSetMessage $value
     * @psalm-param OrderPurchaseOrderNumberSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderPurchaseOrderNumberSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderPurchaseOrderNumberSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderPurchaseOrderNumberSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderPurchaseOrderNumberSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderPurchaseOrderNumberSetMessage $data */
                $data = OrderPurchaseOrderNumberSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
