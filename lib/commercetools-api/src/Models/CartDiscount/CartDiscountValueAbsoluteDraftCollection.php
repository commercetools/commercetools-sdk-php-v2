<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\CartDiscount\CartDiscountValueDraftCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CartDiscountValueDraftCollection<CartDiscountValueAbsoluteDraft>
 * @method CartDiscountValueAbsoluteDraft current()
 * @method CartDiscountValueAbsoluteDraft at($offset)
 */
class CartDiscountValueAbsoluteDraftCollection extends CartDiscountValueDraftCollection
{
    /**
     * @psalm-assert CartDiscountValueAbsoluteDraft $value
     * @psalm-param CartDiscountValueAbsoluteDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountValueAbsoluteDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountValueAbsoluteDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountValueAbsoluteDraft
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountValueAbsoluteDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountValueAbsoluteDraft $data */
                $data = CartDiscountValueAbsoluteDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
