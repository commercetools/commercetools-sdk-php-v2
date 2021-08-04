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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetOrderTotalTaxAction>
 * @method StagedOrderSetOrderTotalTaxAction current()
 * @method StagedOrderSetOrderTotalTaxAction end()
 * @method StagedOrderSetOrderTotalTaxAction at($offset)
 */
class StagedOrderSetOrderTotalTaxActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetOrderTotalTaxAction $value
     * @psalm-param StagedOrderSetOrderTotalTaxAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetOrderTotalTaxActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetOrderTotalTaxAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetOrderTotalTaxAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetOrderTotalTaxAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetOrderTotalTaxAction $data */
                $data = StagedOrderSetOrderTotalTaxActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
