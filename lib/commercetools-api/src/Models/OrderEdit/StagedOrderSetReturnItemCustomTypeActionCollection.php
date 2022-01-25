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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetReturnItemCustomTypeAction>
 * @method StagedOrderSetReturnItemCustomTypeAction current()
 * @method StagedOrderSetReturnItemCustomTypeAction end()
 * @method StagedOrderSetReturnItemCustomTypeAction at($offset)
 */
class StagedOrderSetReturnItemCustomTypeActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetReturnItemCustomTypeAction $value
     * @psalm-param StagedOrderSetReturnItemCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetReturnItemCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetReturnItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetReturnItemCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetReturnItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetReturnItemCustomTypeAction $data */
                $data = StagedOrderSetReturnItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
