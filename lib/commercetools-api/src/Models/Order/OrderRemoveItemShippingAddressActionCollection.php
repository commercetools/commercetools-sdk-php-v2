<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderRemoveItemShippingAddressAction>
 * @method OrderRemoveItemShippingAddressAction current()
 * @method OrderRemoveItemShippingAddressAction at($offset)
 */
class OrderRemoveItemShippingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderRemoveItemShippingAddressAction $value
     * @psalm-param OrderRemoveItemShippingAddressAction|stdClass $value
     * @return OrderRemoveItemShippingAddressActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderRemoveItemShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderRemoveItemShippingAddressAction
     */
    protected function mapper()
    {
        return function(int $index): ?OrderRemoveItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderRemoveItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}