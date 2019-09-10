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
 * @extends MapperSequence<StagedOrderSetCustomLineItemTaxAmountAction>
 *
 * @method StagedOrderSetCustomLineItemTaxAmountAction current()
 * @method StagedOrderSetCustomLineItemTaxAmountAction at($offset)
 */
class StagedOrderSetCustomLineItemTaxAmountActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetCustomLineItemTaxAmountAction $value
     * @psalm-param StagedOrderSetCustomLineItemTaxAmountAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetCustomLineItemTaxAmountActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetCustomLineItemTaxAmountAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetCustomLineItemTaxAmountAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetCustomLineItemTaxAmountAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetCustomLineItemTaxAmountActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
