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
 * @extends MapperSequence<CartRemoveCustomLineItemAction>
 * @method CartRemoveCustomLineItemAction current()
 * @method CartRemoveCustomLineItemAction at($offset)
 */
class CartRemoveCustomLineItemActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartRemoveCustomLineItemAction $value
     * @psalm-param CartRemoveCustomLineItemAction|stdClass $value
     * @return CartRemoveCustomLineItemActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartRemoveCustomLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartRemoveCustomLineItemAction
     */
    protected function mapper()
    {
        return function(int $index): ?CartRemoveCustomLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartRemoveCustomLineItemActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}