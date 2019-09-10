<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderSetCustomLineItemShippingDetailsAction>
 *
 * @method OrderSetCustomLineItemShippingDetailsAction current()
 * @method OrderSetCustomLineItemShippingDetailsAction at($offset)
 */
class OrderSetCustomLineItemShippingDetailsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetCustomLineItemShippingDetailsAction $value
     * @psalm-param OrderSetCustomLineItemShippingDetailsAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderSetCustomLineItemShippingDetailsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetCustomLineItemShippingDetailsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetCustomLineItemShippingDetailsAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetCustomLineItemShippingDetailsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetCustomLineItemShippingDetailsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
