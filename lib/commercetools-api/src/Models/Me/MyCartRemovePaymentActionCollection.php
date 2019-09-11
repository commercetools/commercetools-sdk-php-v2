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
 * @extends MapperSequence<MyCartRemovePaymentAction>
 *
 * @method MyCartRemovePaymentAction current()
 * @method MyCartRemovePaymentAction at($offset)
 */
class MyCartRemovePaymentActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartRemovePaymentAction $value
     * @psalm-param MyCartRemovePaymentAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCartRemovePaymentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartRemovePaymentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartRemovePaymentAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartRemovePaymentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartRemovePaymentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
