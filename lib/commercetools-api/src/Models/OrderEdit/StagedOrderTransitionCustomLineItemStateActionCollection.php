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
 * @extends MapperSequence<StagedOrderTransitionCustomLineItemStateAction>
 *
 * @method StagedOrderTransitionCustomLineItemStateAction current()
 * @method StagedOrderTransitionCustomLineItemStateAction at($offset)
 */
class StagedOrderTransitionCustomLineItemStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderTransitionCustomLineItemStateAction $value
     * @psalm-param StagedOrderTransitionCustomLineItemStateAction|stdClass $value
     *
     * @param mixed $value
     *
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
                $data = StagedOrderTransitionCustomLineItemStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
