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
 * @extends MapperSequence<CartDiscountSetValidFromAction>
 * @method CartDiscountSetValidFromAction current()
 * @method CartDiscountSetValidFromAction at($offset)
 */
class CartDiscountSetValidFromActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountSetValidFromAction $value
     * @psalm-param CartDiscountSetValidFromAction|stdClass $value
     * @return CartDiscountSetValidFromActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountSetValidFromAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountSetValidFromAction
     */
    protected function mapper()
    {
        return function(int $index): ?CartDiscountSetValidFromAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountSetValidFromActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}