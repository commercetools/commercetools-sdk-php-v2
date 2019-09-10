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
 * @extends MapperSequence<CartRecalculateAction>
 * @method CartRecalculateAction current()
 * @method CartRecalculateAction at($offset)
 */
class CartRecalculateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartRecalculateAction $value
     * @psalm-param CartRecalculateAction|stdClass $value
     * @return CartRecalculateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartRecalculateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartRecalculateAction
     */
    protected function mapper()
    {
        return function(int $index): ?CartRecalculateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartRecalculateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}