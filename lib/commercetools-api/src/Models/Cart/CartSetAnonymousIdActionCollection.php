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
 * @extends MapperSequence<CartSetAnonymousIdAction>
 * @method CartSetAnonymousIdAction current()
 * @method CartSetAnonymousIdAction at($offset)
 */
class CartSetAnonymousIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetAnonymousIdAction $value
     * @psalm-param CartSetAnonymousIdAction|stdClass $value
     * @return CartSetAnonymousIdActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartSetAnonymousIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetAnonymousIdAction
     */
    protected function mapper()
    {
        return function(int $index): ?CartSetAnonymousIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetAnonymousIdActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}