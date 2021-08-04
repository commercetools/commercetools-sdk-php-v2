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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetLineItemTaxRateAction>
 * @method StagedOrderSetLineItemTaxRateAction current()
 * @method StagedOrderSetLineItemTaxRateAction end()
 * @method StagedOrderSetLineItemTaxRateAction at($offset)
 */
class StagedOrderSetLineItemTaxRateActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetLineItemTaxRateAction $value
     * @psalm-param StagedOrderSetLineItemTaxRateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetLineItemTaxRateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetLineItemTaxRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetLineItemTaxRateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetLineItemTaxRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetLineItemTaxRateAction $data */
                $data = StagedOrderSetLineItemTaxRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
