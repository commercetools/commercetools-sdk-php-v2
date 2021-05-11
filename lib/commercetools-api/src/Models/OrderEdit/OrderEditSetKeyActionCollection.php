<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\OrderEdit\OrderEditUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderEditUpdateActionCollection<OrderEditSetKeyAction>
 * @method OrderEditSetKeyAction current()
 * @method OrderEditSetKeyAction at($offset)
 */
class OrderEditSetKeyActionCollection extends OrderEditUpdateActionCollection
{
    /**
     * @psalm-assert OrderEditSetKeyAction $value
     * @psalm-param OrderEditSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditSetKeyAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditSetKeyAction $data */
                $data = OrderEditSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
