<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartSetLineItemTaxRateAction>
 * @method CartSetLineItemTaxRateAction current()
 * @method CartSetLineItemTaxRateAction at($offset)
 */
class CartSetLineItemTaxRateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetLineItemTaxRateAction $value
     * @psalm-param CartSetLineItemTaxRateAction|stdClass $value
     * @return CartSetLineItemTaxRateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartSetLineItemTaxRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetLineItemTaxRateAction
     */
    protected function mapper()
    {
        return function(int $index): ?CartSetLineItemTaxRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetLineItemTaxRateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}