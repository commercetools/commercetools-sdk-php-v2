<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetCustomShippingMethodAction>
 * @method StagedOrderSetCustomShippingMethodAction current()
 * @method StagedOrderSetCustomShippingMethodAction end()
 * @method StagedOrderSetCustomShippingMethodAction at($offset)
 */
class StagedOrderSetCustomShippingMethodActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetCustomShippingMethodAction $value
     * @psalm-param StagedOrderSetCustomShippingMethodAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetCustomShippingMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetCustomShippingMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetCustomShippingMethodAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetCustomShippingMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetCustomShippingMethodAction $data */
                $data = StagedOrderSetCustomShippingMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
