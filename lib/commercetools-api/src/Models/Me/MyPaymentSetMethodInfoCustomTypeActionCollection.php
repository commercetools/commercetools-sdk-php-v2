<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyPaymentUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyPaymentUpdateActionCollection<MyPaymentSetMethodInfoCustomTypeAction>
 * @method MyPaymentSetMethodInfoCustomTypeAction current()
 * @method MyPaymentSetMethodInfoCustomTypeAction end()
 * @method MyPaymentSetMethodInfoCustomTypeAction at($offset)
 */
class MyPaymentSetMethodInfoCustomTypeActionCollection extends MyPaymentUpdateActionCollection
{
    /**
     * @psalm-assert MyPaymentSetMethodInfoCustomTypeAction $value
     * @psalm-param MyPaymentSetMethodInfoCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyPaymentSetMethodInfoCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPaymentSetMethodInfoCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPaymentSetMethodInfoCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyPaymentSetMethodInfoCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyPaymentSetMethodInfoCustomTypeAction $data */
                $data = MyPaymentSetMethodInfoCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
