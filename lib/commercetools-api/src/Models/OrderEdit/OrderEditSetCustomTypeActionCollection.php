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
 * @extends OrderEditUpdateActionCollection<OrderEditSetCustomTypeAction>
 * @method OrderEditSetCustomTypeAction current()
 * @method OrderEditSetCustomTypeAction at($offset)
 */
class OrderEditSetCustomTypeActionCollection extends OrderEditUpdateActionCollection
{
    /**
     * @psalm-assert OrderEditSetCustomTypeAction $value
     * @psalm-param OrderEditSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditSetCustomTypeActionCollection
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
        return function (?int $index): ?OrderEditSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditSetCustomTypeAction $data */
                $data = OrderEditSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
