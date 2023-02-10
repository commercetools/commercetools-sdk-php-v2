<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessagePayloadCollection<OrderPurchaseOrderNumberSetMessagePayload>
 * @method OrderPurchaseOrderNumberSetMessagePayload current()
 * @method OrderPurchaseOrderNumberSetMessagePayload end()
 * @method OrderPurchaseOrderNumberSetMessagePayload at($offset)
 */
class OrderPurchaseOrderNumberSetMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderPurchaseOrderNumberSetMessagePayload $value
     * @psalm-param OrderPurchaseOrderNumberSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderPurchaseOrderNumberSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderPurchaseOrderNumberSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderPurchaseOrderNumberSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderPurchaseOrderNumberSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderPurchaseOrderNumberSetMessagePayload $data */
                $data = OrderPurchaseOrderNumberSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
