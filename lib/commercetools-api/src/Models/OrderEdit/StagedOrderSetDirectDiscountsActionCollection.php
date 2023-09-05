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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetDirectDiscountsAction>
 * @method StagedOrderSetDirectDiscountsAction current()
 * @method StagedOrderSetDirectDiscountsAction end()
 * @method StagedOrderSetDirectDiscountsAction at($offset)
 */
class StagedOrderSetDirectDiscountsActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetDirectDiscountsAction $value
     * @psalm-param StagedOrderSetDirectDiscountsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetDirectDiscountsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetDirectDiscountsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetDirectDiscountsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetDirectDiscountsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetDirectDiscountsAction $data */
                $data = StagedOrderSetDirectDiscountsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
