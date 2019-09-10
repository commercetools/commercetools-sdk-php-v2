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
 * @extends MapperSequence<OrderSetOrderNumberAction>
 * @method OrderSetOrderNumberAction current()
 * @method OrderSetOrderNumberAction at($offset)
 */
class OrderSetOrderNumberActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetOrderNumberAction $value
     * @psalm-param OrderSetOrderNumberAction|stdClass $value
     * @return OrderSetOrderNumberActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetOrderNumberAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetOrderNumberAction
     */
    protected function mapper()
    {
        return function(int $index): ?OrderSetOrderNumberAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetOrderNumberActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}