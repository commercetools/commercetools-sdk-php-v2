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
 * @extends MapperSequence<OrderAddReturnInfoAction>
 * @method OrderAddReturnInfoAction current()
 * @method OrderAddReturnInfoAction at($offset)
 */
class OrderAddReturnInfoActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderAddReturnInfoAction $value
     * @psalm-param OrderAddReturnInfoAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderAddReturnInfoActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderAddReturnInfoAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderAddReturnInfoAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderAddReturnInfoAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderAddReturnInfoActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
