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
 * @extends MapperSequence<CartSetCustomFieldAction>
 * @method CartSetCustomFieldAction current()
 * @method CartSetCustomFieldAction at($offset)
 */
class CartSetCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetCustomFieldAction $value
     * @psalm-param CartSetCustomFieldAction|stdClass $value
     * @return CartSetCustomFieldActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetCustomFieldAction
     */
    protected function mapper()
    {
        return function(int $index): ?CartSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}