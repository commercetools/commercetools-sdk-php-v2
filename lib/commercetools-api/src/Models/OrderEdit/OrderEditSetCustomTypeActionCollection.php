<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderEditSetCustomTypeAction>
 * @method OrderEditSetCustomTypeAction current()
 * @method OrderEditSetCustomTypeAction at($offset)
 */
class OrderEditSetCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderEditSetCustomTypeAction $value
     * @psalm-param OrderEditSetCustomTypeAction|stdClass $value
     * @return OrderEditSetCustomTypeActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditSetCustomTypeAction
     */
    protected function mapper()
    {
        return function(int $index): ?OrderEditSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderEditSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}