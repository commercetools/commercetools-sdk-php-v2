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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetReturnInfoAction>
 * @method StagedOrderSetReturnInfoAction current()
 * @method StagedOrderSetReturnInfoAction end()
 * @method StagedOrderSetReturnInfoAction at($offset)
 */
class StagedOrderSetReturnInfoActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetReturnInfoAction $value
     * @psalm-param StagedOrderSetReturnInfoAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetReturnInfoActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetReturnInfoAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetReturnInfoAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetReturnInfoAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetReturnInfoAction $data */
                $data = StagedOrderSetReturnInfoActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
