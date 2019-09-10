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
 * @extends MapperSequence<OrderSetCustomerIdAction>
 * @method OrderSetCustomerIdAction current()
 * @method OrderSetCustomerIdAction at($offset)
 */
class OrderSetCustomerIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetCustomerIdAction $value
     * @psalm-param OrderSetCustomerIdAction|stdClass $value
     * @return OrderSetCustomerIdActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetCustomerIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetCustomerIdAction
     */
    protected function mapper()
    {
        return function(int $index): ?OrderSetCustomerIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetCustomerIdActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}