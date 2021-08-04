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
 * @extends MyCartUpdateActionCollection<MyCartRemovePaymentAction>
 * @method MyCartRemovePaymentAction current()
 * @method MyCartRemovePaymentAction end()
 * @method MyCartRemovePaymentAction at($offset)
 */
class MyCartRemovePaymentActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartRemovePaymentAction $value
     * @psalm-param MyCartRemovePaymentAction|stdClass $value
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
        return function (?int $index): ?MyCartRemovePaymentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartRemovePaymentAction $data */
                $data = MyCartRemovePaymentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
