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
 * @extends MapperSequence<OrderChangePaymentStateAction>
 * @method OrderChangePaymentStateAction current()
 * @method OrderChangePaymentStateAction at($offset)
 */
class OrderChangePaymentStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderChangePaymentStateAction $value
     * @psalm-param OrderChangePaymentStateAction|stdClass $value
     * @return OrderChangePaymentStateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderChangePaymentStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderChangePaymentStateAction
     */
    protected function mapper()
    {
        return function(int $index): ?OrderChangePaymentStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderChangePaymentStateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}