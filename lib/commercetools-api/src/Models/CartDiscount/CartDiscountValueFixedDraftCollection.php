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
 * @extends CartDiscountValueDraftCollection<CartDiscountValueFixedDraft>
 * @method CartDiscountValueFixedDraft current()
 * @method CartDiscountValueFixedDraft end()
 * @method CartDiscountValueFixedDraft at($offset)
 */
class CartDiscountValueFixedDraftCollection extends CartDiscountValueDraftCollection
{
    /**
     * @psalm-assert CartDiscountValueFixedDraft $value
     * @psalm-param CartDiscountValueFixedDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountValueFixedDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountValueFixedDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountValueFixedDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountValueFixedDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountValueFixedDraft $data */
                $data = CartDiscountValueFixedDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
