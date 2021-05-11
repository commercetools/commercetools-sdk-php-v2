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
 * @extends StagedOrderUpdateActionCollection<StagedOrderTransitionLineItemStateAction>
 * @method StagedOrderTransitionLineItemStateAction current()
 * @method StagedOrderTransitionLineItemStateAction at($offset)
 */
class StagedOrderTransitionLineItemStateActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderTransitionLineItemStateAction $value
     * @psalm-param StagedOrderTransitionLineItemStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderTransitionLineItemStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderTransitionLineItemStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderTransitionLineItemStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderTransitionLineItemStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderTransitionLineItemStateAction $data */
                $data = StagedOrderTransitionLineItemStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
