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
 * @extends StagedOrderUpdateActionCollection<StagedOrderRemoveLineItemAction>
 * @method StagedOrderRemoveLineItemAction current()
 * @method StagedOrderRemoveLineItemAction at($offset)
 */
class StagedOrderRemoveLineItemActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderRemoveLineItemAction $value
     * @psalm-param StagedOrderRemoveLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderRemoveLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderRemoveLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderRemoveLineItemAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderRemoveLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderRemoveLineItemAction $data */
                $data = StagedOrderRemoveLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
