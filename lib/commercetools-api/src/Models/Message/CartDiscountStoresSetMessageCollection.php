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
 * @extends MessageCollection<CartDiscountStoresSetMessage>
 * @method CartDiscountStoresSetMessage current()
 * @method CartDiscountStoresSetMessage end()
 * @method CartDiscountStoresSetMessage at($offset)
 */
class CartDiscountStoresSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CartDiscountStoresSetMessage $value
     * @psalm-param CartDiscountStoresSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountStoresSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountStoresSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountStoresSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountStoresSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountStoresSetMessage $data */
                $data = CartDiscountStoresSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
