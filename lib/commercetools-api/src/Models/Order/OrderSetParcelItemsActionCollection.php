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
 * @extends MapperSequence<OrderSetParcelItemsAction>
 *
 * @method OrderSetParcelItemsAction current()
 * @method OrderSetParcelItemsAction at($offset)
 */
class OrderSetParcelItemsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetParcelItemsAction $value
     * @psalm-param OrderSetParcelItemsAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderSetParcelItemsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetParcelItemsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetParcelItemsAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetParcelItemsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetParcelItemsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
