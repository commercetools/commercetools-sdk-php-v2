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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetShippingCustomFieldAction>
 * @method StagedOrderSetShippingCustomFieldAction current()
 * @method StagedOrderSetShippingCustomFieldAction end()
 * @method StagedOrderSetShippingCustomFieldAction at($offset)
 */
class StagedOrderSetShippingCustomFieldActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetShippingCustomFieldAction $value
     * @psalm-param StagedOrderSetShippingCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetShippingCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetShippingCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetShippingCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetShippingCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetShippingCustomFieldAction $data */
                $data = StagedOrderSetShippingCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
