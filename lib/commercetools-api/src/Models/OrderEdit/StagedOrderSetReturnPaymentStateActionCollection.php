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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetReturnPaymentStateAction>
 * @method StagedOrderSetReturnPaymentStateAction current()
 * @method StagedOrderSetReturnPaymentStateAction at($offset)
 */
class StagedOrderSetReturnPaymentStateActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetReturnPaymentStateAction $value
     * @psalm-param StagedOrderSetReturnPaymentStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetReturnPaymentStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetReturnPaymentStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetReturnPaymentStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetReturnPaymentStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetReturnPaymentStateAction $data */
                $data = StagedOrderSetReturnPaymentStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
