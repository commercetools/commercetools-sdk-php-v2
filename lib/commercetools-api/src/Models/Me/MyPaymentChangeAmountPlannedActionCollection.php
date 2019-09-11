<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MyPaymentChangeAmountPlannedAction>
 *
 * @method MyPaymentChangeAmountPlannedAction current()
 * @method MyPaymentChangeAmountPlannedAction at($offset)
 */
class MyPaymentChangeAmountPlannedActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyPaymentChangeAmountPlannedAction $value
     * @psalm-param MyPaymentChangeAmountPlannedAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyPaymentChangeAmountPlannedActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPaymentChangeAmountPlannedAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPaymentChangeAmountPlannedAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyPaymentChangeAmountPlannedAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyPaymentChangeAmountPlannedActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
