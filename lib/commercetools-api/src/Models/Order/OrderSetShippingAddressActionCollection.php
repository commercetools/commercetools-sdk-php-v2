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
 * @extends MapperSequence<OrderSetShippingAddressAction>
 * @method OrderSetShippingAddressAction current()
 * @method OrderSetShippingAddressAction at($offset)
 */
class OrderSetShippingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetShippingAddressAction $value
     * @psalm-param OrderSetShippingAddressAction|stdClass $value
     * @return OrderSetShippingAddressActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetShippingAddressAction
     */
    protected function mapper()
    {
        return function(int $index): ?OrderSetShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}