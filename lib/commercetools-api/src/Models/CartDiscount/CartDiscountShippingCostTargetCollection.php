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
 * @extends MapperSequence<CartDiscountShippingCostTarget>
 * @method CartDiscountShippingCostTarget current()
 * @method CartDiscountShippingCostTarget at($offset)
 */
class CartDiscountShippingCostTargetCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountShippingCostTarget $value
     * @psalm-param CartDiscountShippingCostTarget|stdClass $value
     * @return CartDiscountShippingCostTargetCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountShippingCostTarget) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountShippingCostTarget
     */
    protected function mapper()
    {
        return function(int $index): ?CartDiscountShippingCostTarget {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountShippingCostTargetModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}