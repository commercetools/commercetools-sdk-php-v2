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
 * @extends MyPaymentUpdateActionCollection<MyPaymentSetMethodInfoInterfaceAccountAction>
 * @method MyPaymentSetMethodInfoInterfaceAccountAction current()
 * @method MyPaymentSetMethodInfoInterfaceAccountAction end()
 * @method MyPaymentSetMethodInfoInterfaceAccountAction at($offset)
 */
class MyPaymentSetMethodInfoInterfaceAccountActionCollection extends MyPaymentUpdateActionCollection
{
    /**
     * @psalm-assert MyPaymentSetMethodInfoInterfaceAccountAction $value
     * @psalm-param MyPaymentSetMethodInfoInterfaceAccountAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyPaymentSetMethodInfoInterfaceAccountActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPaymentSetMethodInfoInterfaceAccountAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPaymentSetMethodInfoInterfaceAccountAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyPaymentSetMethodInfoInterfaceAccountAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyPaymentSetMethodInfoInterfaceAccountAction $data */
                $data = MyPaymentSetMethodInfoInterfaceAccountActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
