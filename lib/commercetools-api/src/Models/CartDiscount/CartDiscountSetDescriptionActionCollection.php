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
 * @extends MapperSequence<CartDiscountSetDescriptionAction>
 * @method CartDiscountSetDescriptionAction current()
 * @method CartDiscountSetDescriptionAction at($offset)
 */
class CartDiscountSetDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountSetDescriptionAction $value
     * @psalm-param CartDiscountSetDescriptionAction|stdClass $value
     * @return CartDiscountSetDescriptionActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountSetDescriptionAction
     */
    protected function mapper()
    {
        return function(int $index): ?CartDiscountSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}