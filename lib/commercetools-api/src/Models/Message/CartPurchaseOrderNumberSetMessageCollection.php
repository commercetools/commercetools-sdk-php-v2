<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<CartPurchaseOrderNumberSetMessage>
 * @method CartPurchaseOrderNumberSetMessage current()
 * @method CartPurchaseOrderNumberSetMessage end()
 * @method CartPurchaseOrderNumberSetMessage at($offset)
 */
class CartPurchaseOrderNumberSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CartPurchaseOrderNumberSetMessage $value
     * @psalm-param CartPurchaseOrderNumberSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartPurchaseOrderNumberSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartPurchaseOrderNumberSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartPurchaseOrderNumberSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CartPurchaseOrderNumberSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartPurchaseOrderNumberSetMessage $data */
                $data = CartPurchaseOrderNumberSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
