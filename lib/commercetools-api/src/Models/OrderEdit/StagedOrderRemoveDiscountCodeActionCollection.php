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
 * @extends StagedOrderUpdateActionCollection<StagedOrderRemoveDiscountCodeAction>
 * @method StagedOrderRemoveDiscountCodeAction current()
 * @method StagedOrderRemoveDiscountCodeAction at($offset)
 */
class StagedOrderRemoveDiscountCodeActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderRemoveDiscountCodeAction $value
     * @psalm-param StagedOrderRemoveDiscountCodeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderRemoveDiscountCodeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderRemoveDiscountCodeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderRemoveDiscountCodeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderRemoveDiscountCodeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderRemoveDiscountCodeAction $data */
                $data = StagedOrderRemoveDiscountCodeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
