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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetCustomerGroupAction>
 * @method StagedOrderSetCustomerGroupAction current()
 * @method StagedOrderSetCustomerGroupAction at($offset)
 */
class StagedOrderSetCustomerGroupActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetCustomerGroupAction $value
     * @psalm-param StagedOrderSetCustomerGroupAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetCustomerGroupActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetCustomerGroupAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetCustomerGroupAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetCustomerGroupAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetCustomerGroupAction $data */
                $data = StagedOrderSetCustomerGroupActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
