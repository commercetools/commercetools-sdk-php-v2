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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetLineItemTaxAmountAction>
 * @method StagedOrderSetLineItemTaxAmountAction current()
 * @method StagedOrderSetLineItemTaxAmountAction end()
 * @method StagedOrderSetLineItemTaxAmountAction at($offset)
 */
class StagedOrderSetLineItemTaxAmountActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetLineItemTaxAmountAction $value
     * @psalm-param StagedOrderSetLineItemTaxAmountAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetLineItemTaxAmountActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetLineItemTaxAmountAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetLineItemTaxAmountAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetLineItemTaxAmountAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetLineItemTaxAmountAction $data */
                $data = StagedOrderSetLineItemTaxAmountActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
