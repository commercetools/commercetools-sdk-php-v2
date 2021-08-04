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
 * @extends CartDiscountValueDraftCollection<CartDiscountValueGiftLineItemDraft>
 * @method CartDiscountValueGiftLineItemDraft current()
 * @method CartDiscountValueGiftLineItemDraft end()
 * @method CartDiscountValueGiftLineItemDraft at($offset)
 */
class CartDiscountValueGiftLineItemDraftCollection extends CartDiscountValueDraftCollection
{
    /**
     * @psalm-assert CartDiscountValueGiftLineItemDraft $value
     * @psalm-param CartDiscountValueGiftLineItemDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountValueGiftLineItemDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountValueGiftLineItemDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountValueGiftLineItemDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountValueGiftLineItemDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountValueGiftLineItemDraft $data */
                $data = CartDiscountValueGiftLineItemDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
