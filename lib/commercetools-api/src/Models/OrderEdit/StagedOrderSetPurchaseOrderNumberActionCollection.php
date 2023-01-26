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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetPurchaseOrderNumberAction>
 * @method StagedOrderSetPurchaseOrderNumberAction current()
 * @method StagedOrderSetPurchaseOrderNumberAction end()
 * @method StagedOrderSetPurchaseOrderNumberAction at($offset)
 */
class StagedOrderSetPurchaseOrderNumberActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetPurchaseOrderNumberAction $value
     * @psalm-param StagedOrderSetPurchaseOrderNumberAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetPurchaseOrderNumberActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetPurchaseOrderNumberAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetPurchaseOrderNumberAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetPurchaseOrderNumberAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetPurchaseOrderNumberAction $data */
                $data = StagedOrderSetPurchaseOrderNumberActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
