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
 * @extends MyPaymentUpdateActionCollection<MyPaymentSetMethodInfoInterfaceAction>
 * @method MyPaymentSetMethodInfoInterfaceAction current()
 * @method MyPaymentSetMethodInfoInterfaceAction end()
 * @method MyPaymentSetMethodInfoInterfaceAction at($offset)
 */
class MyPaymentSetMethodInfoInterfaceActionCollection extends MyPaymentUpdateActionCollection
{
    /**
     * @psalm-assert MyPaymentSetMethodInfoInterfaceAction $value
     * @psalm-param MyPaymentSetMethodInfoInterfaceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyPaymentSetMethodInfoInterfaceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPaymentSetMethodInfoInterfaceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPaymentSetMethodInfoInterfaceAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyPaymentSetMethodInfoInterfaceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyPaymentSetMethodInfoInterfaceAction $data */
                $data = MyPaymentSetMethodInfoInterfaceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
