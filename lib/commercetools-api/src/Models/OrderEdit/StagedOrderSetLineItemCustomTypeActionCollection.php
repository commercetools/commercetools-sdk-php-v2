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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetLineItemCustomTypeAction>
 * @method StagedOrderSetLineItemCustomTypeAction current()
 * @method StagedOrderSetLineItemCustomTypeAction at($offset)
 */
class StagedOrderSetLineItemCustomTypeActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetLineItemCustomTypeAction $value
     * @psalm-param StagedOrderSetLineItemCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetLineItemCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetLineItemCustomTypeAction $data */
                $data = StagedOrderSetLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
