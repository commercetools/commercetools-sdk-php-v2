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
 * @extends StagedOrderUpdateActionCollection<StagedOrderChangeCustomLineItemMoneyAction>
 * @method StagedOrderChangeCustomLineItemMoneyAction current()
 * @method StagedOrderChangeCustomLineItemMoneyAction at($offset)
 */
class StagedOrderChangeCustomLineItemMoneyActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderChangeCustomLineItemMoneyAction $value
     * @psalm-param StagedOrderChangeCustomLineItemMoneyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderChangeCustomLineItemMoneyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderChangeCustomLineItemMoneyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderChangeCustomLineItemMoneyAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderChangeCustomLineItemMoneyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderChangeCustomLineItemMoneyAction $data */
                $data = StagedOrderChangeCustomLineItemMoneyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
