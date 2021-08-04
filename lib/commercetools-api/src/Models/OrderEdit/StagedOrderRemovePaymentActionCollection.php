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
 * @extends StagedOrderUpdateActionCollection<StagedOrderRemovePaymentAction>
 * @method StagedOrderRemovePaymentAction current()
 * @method StagedOrderRemovePaymentAction end()
 * @method StagedOrderRemovePaymentAction at($offset)
 */
class StagedOrderRemovePaymentActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderRemovePaymentAction $value
     * @psalm-param StagedOrderRemovePaymentAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderRemovePaymentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderRemovePaymentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderRemovePaymentAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderRemovePaymentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderRemovePaymentAction $data */
                $data = StagedOrderRemovePaymentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
