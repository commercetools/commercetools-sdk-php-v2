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
 * @extends CartDiscountValueDraftCollection<CartDiscountValueRelativeDraft>
 * @method CartDiscountValueRelativeDraft current()
 * @method CartDiscountValueRelativeDraft at($offset)
 */
class CartDiscountValueRelativeDraftCollection extends CartDiscountValueDraftCollection
{
    /**
     * @psalm-assert CartDiscountValueRelativeDraft $value
     * @psalm-param CartDiscountValueRelativeDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountValueRelativeDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountValueRelativeDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountValueRelativeDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountValueRelativeDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountValueRelativeDraft $data */
                $data = CartDiscountValueRelativeDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
