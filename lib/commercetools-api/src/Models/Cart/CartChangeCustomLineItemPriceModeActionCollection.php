<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Cart\CartUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CartUpdateActionCollection<CartChangeCustomLineItemPriceModeAction>
 * @method CartChangeCustomLineItemPriceModeAction current()
 * @method CartChangeCustomLineItemPriceModeAction end()
 * @method CartChangeCustomLineItemPriceModeAction at($offset)
 */
class CartChangeCustomLineItemPriceModeActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartChangeCustomLineItemPriceModeAction $value
     * @psalm-param CartChangeCustomLineItemPriceModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartChangeCustomLineItemPriceModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartChangeCustomLineItemPriceModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartChangeCustomLineItemPriceModeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartChangeCustomLineItemPriceModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartChangeCustomLineItemPriceModeAction $data */
                $data = CartChangeCustomLineItemPriceModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
