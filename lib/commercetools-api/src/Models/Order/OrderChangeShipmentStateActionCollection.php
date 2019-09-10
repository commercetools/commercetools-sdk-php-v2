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
 * @extends MapperSequence<OrderChangeShipmentStateAction>
 * @method OrderChangeShipmentStateAction current()
 * @method OrderChangeShipmentStateAction at($offset)
 */
class OrderChangeShipmentStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderChangeShipmentStateAction $value
     * @psalm-param OrderChangeShipmentStateAction|stdClass $value
     * @return OrderChangeShipmentStateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderChangeShipmentStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderChangeShipmentStateAction
     */
    protected function mapper()
    {
        return function(int $index): ?OrderChangeShipmentStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderChangeShipmentStateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}