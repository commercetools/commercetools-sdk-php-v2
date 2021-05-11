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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetCustomLineItemCustomTypeAction>
 * @method StagedOrderSetCustomLineItemCustomTypeAction current()
 * @method StagedOrderSetCustomLineItemCustomTypeAction at($offset)
 */
class StagedOrderSetCustomLineItemCustomTypeActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetCustomLineItemCustomTypeAction $value
     * @psalm-param StagedOrderSetCustomLineItemCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetCustomLineItemCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetCustomLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetCustomLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetCustomLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetCustomLineItemCustomTypeAction $data */
                $data = StagedOrderSetCustomLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
