<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Order\OrderUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderUpdateActionCollection<OrderSetBusinessUnitAction>
 * @method OrderSetBusinessUnitAction current()
 * @method OrderSetBusinessUnitAction end()
 * @method OrderSetBusinessUnitAction at($offset)
 */
class OrderSetBusinessUnitActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetBusinessUnitAction $value
     * @psalm-param OrderSetBusinessUnitAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetBusinessUnitActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetBusinessUnitAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetBusinessUnitAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetBusinessUnitAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetBusinessUnitAction $data */
                $data = OrderSetBusinessUnitActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
