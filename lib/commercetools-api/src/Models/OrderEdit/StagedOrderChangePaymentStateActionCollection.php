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
 * @extends MapperSequence<StagedOrderChangePaymentStateAction>
 * @method StagedOrderChangePaymentStateAction current()
 * @method StagedOrderChangePaymentStateAction at($offset)
 */
class StagedOrderChangePaymentStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderChangePaymentStateAction $value
     * @psalm-param StagedOrderChangePaymentStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderChangePaymentStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderChangePaymentStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderChangePaymentStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderChangePaymentStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderChangePaymentStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
