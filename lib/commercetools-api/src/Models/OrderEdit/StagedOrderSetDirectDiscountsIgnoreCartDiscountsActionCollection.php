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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetDirectDiscountsIgnoreCartDiscountsAction>
 * @method StagedOrderSetDirectDiscountsIgnoreCartDiscountsAction current()
 * @method StagedOrderSetDirectDiscountsIgnoreCartDiscountsAction end()
 * @method StagedOrderSetDirectDiscountsIgnoreCartDiscountsAction at($offset)
 */
class StagedOrderSetDirectDiscountsIgnoreCartDiscountsActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetDirectDiscountsIgnoreCartDiscountsAction $value
     * @psalm-param StagedOrderSetDirectDiscountsIgnoreCartDiscountsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetDirectDiscountsIgnoreCartDiscountsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetDirectDiscountsIgnoreCartDiscountsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetDirectDiscountsIgnoreCartDiscountsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetDirectDiscountsIgnoreCartDiscountsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetDirectDiscountsIgnoreCartDiscountsAction $data */
                $data = StagedOrderSetDirectDiscountsIgnoreCartDiscountsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
