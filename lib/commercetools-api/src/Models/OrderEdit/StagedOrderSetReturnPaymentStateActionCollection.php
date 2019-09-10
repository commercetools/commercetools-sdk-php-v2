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
 * @extends MapperSequence<StagedOrderSetReturnPaymentStateAction>
 *
 * @method StagedOrderSetReturnPaymentStateAction current()
 * @method StagedOrderSetReturnPaymentStateAction at($offset)
 */
class StagedOrderSetReturnPaymentStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetReturnPaymentStateAction $value
     * @psalm-param StagedOrderSetReturnPaymentStateAction|stdClass $value
     *
     * @param mixed $value
     *
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
                $data = StagedOrderSetReturnPaymentStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
