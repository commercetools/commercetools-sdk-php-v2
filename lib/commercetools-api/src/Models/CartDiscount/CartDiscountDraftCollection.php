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
 * @extends MapperSequence<CartDiscountDraft>
 * @method CartDiscountDraft current()
 * @method CartDiscountDraft end()
 * @method CartDiscountDraft at($offset)
 */
class CartDiscountDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountDraft $value
     * @psalm-param CartDiscountDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountDraft $data */
                $data = CartDiscountDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
