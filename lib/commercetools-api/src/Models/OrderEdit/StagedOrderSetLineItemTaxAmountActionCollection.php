<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StagedOrderSetLineItemTaxAmountAction>
 * @method StagedOrderSetLineItemTaxAmountAction current()
 * @method StagedOrderSetLineItemTaxAmountAction at($offset)
 */
class StagedOrderSetLineItemTaxAmountActionCollection extends MapperSequence
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
        return function (int $index): ?StagedOrderSetLineItemTaxAmountAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetLineItemTaxAmountActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
