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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetDeliveryCustomTypeAction>
 * @method StagedOrderSetDeliveryCustomTypeAction current()
 * @method StagedOrderSetDeliveryCustomTypeAction end()
 * @method StagedOrderSetDeliveryCustomTypeAction at($offset)
 */
class StagedOrderSetDeliveryCustomTypeActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetDeliveryCustomTypeAction $value
     * @psalm-param StagedOrderSetDeliveryCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetDeliveryCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetDeliveryCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetDeliveryCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetDeliveryCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetDeliveryCustomTypeAction $data */
                $data = StagedOrderSetDeliveryCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
