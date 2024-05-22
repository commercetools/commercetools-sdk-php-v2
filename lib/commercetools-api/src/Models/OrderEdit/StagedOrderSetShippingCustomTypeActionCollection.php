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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetShippingCustomTypeAction>
 * @method StagedOrderSetShippingCustomTypeAction current()
 * @method StagedOrderSetShippingCustomTypeAction end()
 * @method StagedOrderSetShippingCustomTypeAction at($offset)
 */
class StagedOrderSetShippingCustomTypeActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetShippingCustomTypeAction $value
     * @psalm-param StagedOrderSetShippingCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetShippingCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetShippingCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetShippingCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetShippingCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetShippingCustomTypeAction $data */
                $data = StagedOrderSetShippingCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
