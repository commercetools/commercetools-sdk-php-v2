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
 * @extends MapperSequence<OrderSetCustomLineItemCustomTypeAction>
 *
 * @method OrderSetCustomLineItemCustomTypeAction current()
 * @method OrderSetCustomLineItemCustomTypeAction at($offset)
 */
class OrderSetCustomLineItemCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetCustomLineItemCustomTypeAction $value
     * @psalm-param OrderSetCustomLineItemCustomTypeAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderSetCustomLineItemCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetCustomLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetCustomLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetCustomLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetCustomLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
