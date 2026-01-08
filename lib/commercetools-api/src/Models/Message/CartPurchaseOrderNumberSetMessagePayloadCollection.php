<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<CartPurchaseOrderNumberSetMessagePayload>
 * @method CartPurchaseOrderNumberSetMessagePayload current()
 * @method CartPurchaseOrderNumberSetMessagePayload end()
 * @method CartPurchaseOrderNumberSetMessagePayload at($offset)
 */
class CartPurchaseOrderNumberSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CartPurchaseOrderNumberSetMessagePayload $value
     * @psalm-param CartPurchaseOrderNumberSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartPurchaseOrderNumberSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartPurchaseOrderNumberSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartPurchaseOrderNumberSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CartPurchaseOrderNumberSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartPurchaseOrderNumberSetMessagePayload $data */
                $data = CartPurchaseOrderNumberSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
