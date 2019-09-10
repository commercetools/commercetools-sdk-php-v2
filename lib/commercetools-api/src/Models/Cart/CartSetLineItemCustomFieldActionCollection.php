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
 * @extends MapperSequence<CartSetLineItemCustomFieldAction>
 * @method CartSetLineItemCustomFieldAction current()
 * @method CartSetLineItemCustomFieldAction at($offset)
 */
class CartSetLineItemCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetLineItemCustomFieldAction $value
     * @psalm-param CartSetLineItemCustomFieldAction|stdClass $value
     * @return CartSetLineItemCustomFieldActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartSetLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function(int $index): ?CartSetLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}