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
 * @extends MessageCollection<CartEstimatedDeliverySetMessage>
 * @method CartEstimatedDeliverySetMessage current()
 * @method CartEstimatedDeliverySetMessage end()
 * @method CartEstimatedDeliverySetMessage at($offset)
 */
class CartEstimatedDeliverySetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CartEstimatedDeliverySetMessage $value
     * @psalm-param CartEstimatedDeliverySetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartEstimatedDeliverySetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartEstimatedDeliverySetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartEstimatedDeliverySetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CartEstimatedDeliverySetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartEstimatedDeliverySetMessage $data */
                $data = CartEstimatedDeliverySetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
