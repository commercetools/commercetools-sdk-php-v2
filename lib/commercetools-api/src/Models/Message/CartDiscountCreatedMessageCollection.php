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
 * @extends MessageCollection<CartDiscountCreatedMessage>
 * @method CartDiscountCreatedMessage current()
 * @method CartDiscountCreatedMessage end()
 * @method CartDiscountCreatedMessage at($offset)
 */
class CartDiscountCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CartDiscountCreatedMessage $value
     * @psalm-param CartDiscountCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountCreatedMessage $data */
                $data = CartDiscountCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
