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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetLineItemShippingDetailsAction>
 * @method StagedOrderSetLineItemShippingDetailsAction current()
 * @method StagedOrderSetLineItemShippingDetailsAction end()
 * @method StagedOrderSetLineItemShippingDetailsAction at($offset)
 */
class StagedOrderSetLineItemShippingDetailsActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetLineItemShippingDetailsAction $value
     * @psalm-param StagedOrderSetLineItemShippingDetailsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetLineItemShippingDetailsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetLineItemShippingDetailsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetLineItemShippingDetailsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetLineItemShippingDetailsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetLineItemShippingDetailsAction $data */
                $data = StagedOrderSetLineItemShippingDetailsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
