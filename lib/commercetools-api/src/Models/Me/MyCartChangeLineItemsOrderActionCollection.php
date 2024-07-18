<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyCartUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyCartUpdateActionCollection<MyCartChangeLineItemsOrderAction>
 * @method MyCartChangeLineItemsOrderAction current()
 * @method MyCartChangeLineItemsOrderAction end()
 * @method MyCartChangeLineItemsOrderAction at($offset)
 */
class MyCartChangeLineItemsOrderActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartChangeLineItemsOrderAction $value
     * @psalm-param MyCartChangeLineItemsOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartChangeLineItemsOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartChangeLineItemsOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartChangeLineItemsOrderAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartChangeLineItemsOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartChangeLineItemsOrderAction $data */
                $data = MyCartChangeLineItemsOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
