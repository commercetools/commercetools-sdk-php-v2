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
 * @extends StagedOrderUpdateActionCollection<StagedOrderAddCustomLineItemAction>
 * @method StagedOrderAddCustomLineItemAction current()
 * @method StagedOrderAddCustomLineItemAction at($offset)
 */
class StagedOrderAddCustomLineItemActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderAddCustomLineItemAction $value
     * @psalm-param StagedOrderAddCustomLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderAddCustomLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderAddCustomLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderAddCustomLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderAddCustomLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderAddCustomLineItemAction $data */
                $data = StagedOrderAddCustomLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
