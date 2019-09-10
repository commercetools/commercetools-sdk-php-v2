<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderSetCustomFieldAction>
 *
 * @method OrderSetCustomFieldAction current()
 * @method OrderSetCustomFieldAction at($offset)
 */
class OrderSetCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetCustomFieldAction $value
     * @psalm-param OrderSetCustomFieldAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
