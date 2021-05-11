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
 * @extends StagedOrderUpdateActionCollection<StagedOrderImportCustomLineItemStateAction>
 * @method StagedOrderImportCustomLineItemStateAction current()
 * @method StagedOrderImportCustomLineItemStateAction at($offset)
 */
class StagedOrderImportCustomLineItemStateActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderImportCustomLineItemStateAction $value
     * @psalm-param StagedOrderImportCustomLineItemStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderImportCustomLineItemStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderImportCustomLineItemStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderImportCustomLineItemStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderImportCustomLineItemStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderImportCustomLineItemStateAction $data */
                $data = StagedOrderImportCustomLineItemStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
