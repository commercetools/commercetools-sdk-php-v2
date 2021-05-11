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
 * @extends StagedOrderUpdateActionCollection<StagedOrderAddReturnInfoAction>
 * @method StagedOrderAddReturnInfoAction current()
 * @method StagedOrderAddReturnInfoAction at($offset)
 */
class StagedOrderAddReturnInfoActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderAddReturnInfoAction $value
     * @psalm-param StagedOrderAddReturnInfoAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderAddReturnInfoActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderAddReturnInfoAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderAddReturnInfoAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderAddReturnInfoAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderAddReturnInfoAction $data */
                $data = StagedOrderAddReturnInfoActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
