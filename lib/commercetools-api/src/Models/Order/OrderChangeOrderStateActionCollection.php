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
 * @extends MapperSequence<OrderChangeOrderStateAction>
 * @method OrderChangeOrderStateAction current()
 * @method OrderChangeOrderStateAction at($offset)
 */
class OrderChangeOrderStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderChangeOrderStateAction $value
     * @psalm-param OrderChangeOrderStateAction|stdClass $value
     * @return OrderChangeOrderStateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderChangeOrderStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderChangeOrderStateAction
     */
    protected function mapper()
    {
        return function(int $index): ?OrderChangeOrderStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderChangeOrderStateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}