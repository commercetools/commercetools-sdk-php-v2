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
 * @extends StagedOrderUpdateActionCollection<StagedOrderAddDiscountCodeAction>
 * @method StagedOrderAddDiscountCodeAction current()
 * @method StagedOrderAddDiscountCodeAction end()
 * @method StagedOrderAddDiscountCodeAction at($offset)
 */
class StagedOrderAddDiscountCodeActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderAddDiscountCodeAction $value
     * @psalm-param StagedOrderAddDiscountCodeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderAddDiscountCodeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderAddDiscountCodeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderAddDiscountCodeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderAddDiscountCodeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderAddDiscountCodeAction $data */
                $data = StagedOrderAddDiscountCodeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
