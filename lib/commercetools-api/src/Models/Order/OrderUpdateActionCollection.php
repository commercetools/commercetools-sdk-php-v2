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
 * @extends MapperSequence<OrderUpdateAction>
 * @method OrderUpdateAction current()
 * @method OrderUpdateAction at($offset)
 */
class OrderUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderUpdateAction $value
     * @psalm-param OrderUpdateAction|stdClass $value
     * @return OrderUpdateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderUpdateAction
     */
    protected function mapper()
    {
        return function(int $index): ?OrderUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderUpdateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}