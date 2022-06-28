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
 * @extends MyCartUpdateActionCollection<MyCartSetLineItemSupplyChannelAction>
 * @method MyCartSetLineItemSupplyChannelAction current()
 * @method MyCartSetLineItemSupplyChannelAction end()
 * @method MyCartSetLineItemSupplyChannelAction at($offset)
 */
class MyCartSetLineItemSupplyChannelActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartSetLineItemSupplyChannelAction $value
     * @psalm-param MyCartSetLineItemSupplyChannelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetLineItemSupplyChannelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetLineItemSupplyChannelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetLineItemSupplyChannelAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartSetLineItemSupplyChannelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartSetLineItemSupplyChannelAction $data */
                $data = MyCartSetLineItemSupplyChannelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
