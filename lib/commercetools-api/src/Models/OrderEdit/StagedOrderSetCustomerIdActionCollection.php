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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetCustomerIdAction>
 * @method StagedOrderSetCustomerIdAction current()
 * @method StagedOrderSetCustomerIdAction at($offset)
 */
class StagedOrderSetCustomerIdActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetCustomerIdAction $value
     * @psalm-param StagedOrderSetCustomerIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetCustomerIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetCustomerIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetCustomerIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetCustomerIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetCustomerIdAction $data */
                $data = StagedOrderSetCustomerIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
