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
 * @extends MapperSequence<OrderSetCustomTypeAction>
 * @method OrderSetCustomTypeAction current()
 * @method OrderSetCustomTypeAction at($offset)
 */
class OrderSetCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetCustomTypeAction $value
     * @psalm-param OrderSetCustomTypeAction|stdClass $value
     * @return OrderSetCustomTypeActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetCustomTypeAction
     */
    protected function mapper()
    {
        return function(int $index): ?OrderSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}