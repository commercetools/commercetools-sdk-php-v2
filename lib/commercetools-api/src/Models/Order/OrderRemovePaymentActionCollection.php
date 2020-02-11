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
 * @extends MapperSequence<OrderRemovePaymentAction>
 * @method OrderRemovePaymentAction current()
 * @method OrderRemovePaymentAction at($offset)
 */
class OrderRemovePaymentActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderRemovePaymentAction $value
     * @psalm-param OrderRemovePaymentAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderRemovePaymentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderRemovePaymentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderRemovePaymentAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderRemovePaymentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderRemovePaymentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
