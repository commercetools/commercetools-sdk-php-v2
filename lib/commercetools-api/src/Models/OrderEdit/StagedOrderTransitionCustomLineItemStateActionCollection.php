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
 * @extends StagedOrderUpdateActionCollection<StagedOrderTransitionCustomLineItemStateAction>
 * @method StagedOrderTransitionCustomLineItemStateAction current()
 * @method StagedOrderTransitionCustomLineItemStateAction at($offset)
 */
class StagedOrderTransitionCustomLineItemStateActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderTransitionCustomLineItemStateAction $value
     * @psalm-param StagedOrderTransitionCustomLineItemStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderTransitionCustomLineItemStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderTransitionCustomLineItemStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderTransitionCustomLineItemStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderTransitionCustomLineItemStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderTransitionCustomLineItemStateAction $data */
                $data = StagedOrderTransitionCustomLineItemStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
