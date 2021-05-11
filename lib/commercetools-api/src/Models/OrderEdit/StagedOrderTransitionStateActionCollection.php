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
 * @extends StagedOrderUpdateActionCollection<StagedOrderTransitionStateAction>
 * @method StagedOrderTransitionStateAction current()
 * @method StagedOrderTransitionStateAction at($offset)
 */
class StagedOrderTransitionStateActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderTransitionStateAction $value
     * @psalm-param StagedOrderTransitionStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderTransitionStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderTransitionStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderTransitionStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderTransitionStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderTransitionStateAction $data */
                $data = StagedOrderTransitionStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
