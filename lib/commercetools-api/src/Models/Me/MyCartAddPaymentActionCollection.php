<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyCartUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyCartUpdateActionCollection<MyCartAddPaymentAction>
 * @method MyCartAddPaymentAction current()
 * @method MyCartAddPaymentAction end()
 * @method MyCartAddPaymentAction at($offset)
 */
class MyCartAddPaymentActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartAddPaymentAction $value
     * @psalm-param MyCartAddPaymentAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartAddPaymentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartAddPaymentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartAddPaymentAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartAddPaymentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartAddPaymentAction $data */
                $data = MyCartAddPaymentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
