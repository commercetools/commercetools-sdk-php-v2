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
 * @extends MapperSequence<OrderRemoveDeliveryAction>
 * @method OrderRemoveDeliveryAction current()
 * @method OrderRemoveDeliveryAction at($offset)
 */
class OrderRemoveDeliveryActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderRemoveDeliveryAction $value
     * @psalm-param OrderRemoveDeliveryAction|stdClass $value
     * @return OrderRemoveDeliveryActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderRemoveDeliveryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderRemoveDeliveryAction
     */
    protected function mapper()
    {
        return function(int $index): ?OrderRemoveDeliveryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderRemoveDeliveryActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}