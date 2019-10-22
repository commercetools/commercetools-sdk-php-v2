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
 * @extends MapperSequence<CartDiscountValueDraft>
 *
 * @method CartDiscountValueDraft current()
 * @method CartDiscountValueDraft at($offset)
 */
class CartDiscountValueDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountValueDraft $value
     * @psalm-param CartDiscountValueDraft|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartDiscountValueDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountValueDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountValueDraft
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountValueDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountValueDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
