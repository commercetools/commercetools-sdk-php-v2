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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetReturnItemCustomFieldAction>
 * @method StagedOrderSetReturnItemCustomFieldAction current()
 * @method StagedOrderSetReturnItemCustomFieldAction end()
 * @method StagedOrderSetReturnItemCustomFieldAction at($offset)
 */
class StagedOrderSetReturnItemCustomFieldActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetReturnItemCustomFieldAction $value
     * @psalm-param StagedOrderSetReturnItemCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetReturnItemCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetReturnItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetReturnItemCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetReturnItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetReturnItemCustomFieldAction $data */
                $data = StagedOrderSetReturnItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
