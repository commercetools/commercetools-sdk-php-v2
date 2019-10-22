<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartDiscountValueGiftLineItemDraft>
 *
 * @method CartDiscountValueGiftLineItemDraft current()
 * @method CartDiscountValueGiftLineItemDraft at($offset)
 */
class CartDiscountValueGiftLineItemDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountValueGiftLineItemDraft $value
     * @psalm-param CartDiscountValueGiftLineItemDraft|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?CartDiscountValueGiftLineItemDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountValueGiftLineItemDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
