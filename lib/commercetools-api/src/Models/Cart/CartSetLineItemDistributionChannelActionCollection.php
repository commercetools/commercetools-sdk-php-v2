<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartSetLineItemDistributionChannelAction>
 * @method CartSetLineItemDistributionChannelAction current()
 * @method CartSetLineItemDistributionChannelAction at($offset)
 */
class CartSetLineItemDistributionChannelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetLineItemDistributionChannelAction $value
     * @psalm-param CartSetLineItemDistributionChannelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetLineItemDistributionChannelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetLineItemDistributionChannelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetLineItemDistributionChannelAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetLineItemDistributionChannelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetLineItemDistributionChannelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
