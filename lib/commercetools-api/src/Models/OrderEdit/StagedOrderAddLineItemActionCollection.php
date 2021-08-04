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
 * @extends StagedOrderUpdateActionCollection<StagedOrderAddLineItemAction>
 * @method StagedOrderAddLineItemAction current()
 * @method StagedOrderAddLineItemAction end()
 * @method StagedOrderAddLineItemAction at($offset)
 */
class StagedOrderAddLineItemActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderAddLineItemAction $value
     * @psalm-param StagedOrderAddLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderAddLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderAddLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderAddLineItemAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderAddLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderAddLineItemAction $data */
                $data = StagedOrderAddLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
