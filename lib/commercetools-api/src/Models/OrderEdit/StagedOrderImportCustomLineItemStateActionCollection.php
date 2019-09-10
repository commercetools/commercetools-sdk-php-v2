<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StagedOrderImportCustomLineItemStateAction>
 *
 * @method StagedOrderImportCustomLineItemStateAction current()
 * @method StagedOrderImportCustomLineItemStateAction at($offset)
 */
class StagedOrderImportCustomLineItemStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderImportCustomLineItemStateAction $value
     * @psalm-param StagedOrderImportCustomLineItemStateAction|stdClass $value
     *
     * @param mixed $value
     *
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
                $data = StagedOrderImportCustomLineItemStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
