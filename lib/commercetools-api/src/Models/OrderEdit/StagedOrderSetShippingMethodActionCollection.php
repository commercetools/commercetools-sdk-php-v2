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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetShippingMethodAction>
 * @method StagedOrderSetShippingMethodAction current()
 * @method StagedOrderSetShippingMethodAction at($offset)
 */
class StagedOrderSetShippingMethodActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetShippingMethodAction $value
     * @psalm-param StagedOrderSetShippingMethodAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetShippingMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetShippingMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetShippingMethodAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetShippingMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetShippingMethodAction $data */
                $data = StagedOrderSetShippingMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
