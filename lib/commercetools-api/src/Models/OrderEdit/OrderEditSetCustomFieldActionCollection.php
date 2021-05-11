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
 * @extends OrderEditUpdateActionCollection<OrderEditSetCustomFieldAction>
 * @method OrderEditSetCustomFieldAction current()
 * @method OrderEditSetCustomFieldAction at($offset)
 */
class OrderEditSetCustomFieldActionCollection extends OrderEditUpdateActionCollection
{
    /**
     * @psalm-assert OrderEditSetCustomFieldAction $value
     * @psalm-param OrderEditSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditSetCustomFieldAction $data */
                $data = OrderEditSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
