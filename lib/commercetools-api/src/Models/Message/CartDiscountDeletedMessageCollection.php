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
 * @extends MessageCollection<CartDiscountDeletedMessage>
 * @method CartDiscountDeletedMessage current()
 * @method CartDiscountDeletedMessage end()
 * @method CartDiscountDeletedMessage at($offset)
 */
class CartDiscountDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CartDiscountDeletedMessage $value
     * @psalm-param CartDiscountDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountDeletedMessage $data */
                $data = CartDiscountDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
