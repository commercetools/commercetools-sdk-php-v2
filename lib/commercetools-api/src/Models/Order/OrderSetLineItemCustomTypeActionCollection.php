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
 * @extends MapperSequence<OrderSetLineItemCustomTypeAction>
 * @method OrderSetLineItemCustomTypeAction current()
 * @method OrderSetLineItemCustomTypeAction at($offset)
 */
class OrderSetLineItemCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetLineItemCustomTypeAction $value
     * @psalm-param OrderSetLineItemCustomTypeAction|stdClass $value
     * @return OrderSetLineItemCustomTypeActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function(int $index): ?OrderSetLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}