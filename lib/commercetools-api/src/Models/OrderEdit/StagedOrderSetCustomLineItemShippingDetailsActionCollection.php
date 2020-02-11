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
 * @extends MapperSequence<StagedOrderSetCustomLineItemShippingDetailsAction>
 * @method StagedOrderSetCustomLineItemShippingDetailsAction current()
 * @method StagedOrderSetCustomLineItemShippingDetailsAction at($offset)
 */
class StagedOrderSetCustomLineItemShippingDetailsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetCustomLineItemShippingDetailsAction $value
     * @psalm-param StagedOrderSetCustomLineItemShippingDetailsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetCustomLineItemShippingDetailsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetCustomLineItemShippingDetailsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetCustomLineItemShippingDetailsAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetCustomLineItemShippingDetailsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetCustomLineItemShippingDetailsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
