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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetLineItemCustomFieldAction>
 * @method StagedOrderSetLineItemCustomFieldAction current()
 * @method StagedOrderSetLineItemCustomFieldAction end()
 * @method StagedOrderSetLineItemCustomFieldAction at($offset)
 */
class StagedOrderSetLineItemCustomFieldActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetLineItemCustomFieldAction $value
     * @psalm-param StagedOrderSetLineItemCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetLineItemCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetLineItemCustomFieldAction $data */
                $data = StagedOrderSetLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
