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
 * @extends StagedOrderUpdateActionCollection<StagedOrderImportLineItemStateAction>
 * @method StagedOrderImportLineItemStateAction current()
 * @method StagedOrderImportLineItemStateAction at($offset)
 */
class StagedOrderImportLineItemStateActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderImportLineItemStateAction $value
     * @psalm-param StagedOrderImportLineItemStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderImportLineItemStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderImportLineItemStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderImportLineItemStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderImportLineItemStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderImportLineItemStateAction $data */
                $data = StagedOrderImportLineItemStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
