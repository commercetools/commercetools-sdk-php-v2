<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartDiscountValueGiftLineItem>
 * @method CartDiscountValueGiftLineItem current()
 * @method CartDiscountValueGiftLineItem at($offset)
 */
class CartDiscountValueGiftLineItemCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountValueGiftLineItem $value
     * @psalm-param CartDiscountValueGiftLineItem|stdClass $value
     * @return CartDiscountValueGiftLineItemCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountValueGiftLineItem) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountValueGiftLineItem
     */
    protected function mapper()
    {
        return function(int $index): ?CartDiscountValueGiftLineItem {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountValueGiftLineItemModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}