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
 * @extends MapperSequence<CartSetCustomLineItemCustomTypeAction>
 * @method CartSetCustomLineItemCustomTypeAction current()
 * @method CartSetCustomLineItemCustomTypeAction at($offset)
 */
class CartSetCustomLineItemCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetCustomLineItemCustomTypeAction $value
     * @psalm-param CartSetCustomLineItemCustomTypeAction|stdClass $value
     * @return CartSetCustomLineItemCustomTypeActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartSetCustomLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetCustomLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function(int $index): ?CartSetCustomLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetCustomLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}