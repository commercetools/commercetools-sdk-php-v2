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
 * @extends MapperSequence<CartSetCustomLineItemCustomFieldAction>
 * @method CartSetCustomLineItemCustomFieldAction current()
 * @method CartSetCustomLineItemCustomFieldAction at($offset)
 */
class CartSetCustomLineItemCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetCustomLineItemCustomFieldAction $value
     * @psalm-param CartSetCustomLineItemCustomFieldAction|stdClass $value
     * @return CartSetCustomLineItemCustomFieldActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartSetCustomLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetCustomLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function(int $index): ?CartSetCustomLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetCustomLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}