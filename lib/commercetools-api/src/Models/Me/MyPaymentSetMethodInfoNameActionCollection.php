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
 * @extends MyPaymentUpdateActionCollection<MyPaymentSetMethodInfoNameAction>
 * @method MyPaymentSetMethodInfoNameAction current()
 * @method MyPaymentSetMethodInfoNameAction at($offset)
 */
class MyPaymentSetMethodInfoNameActionCollection extends MyPaymentUpdateActionCollection
{
    /**
     * @psalm-assert MyPaymentSetMethodInfoNameAction $value
     * @psalm-param MyPaymentSetMethodInfoNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyPaymentSetMethodInfoNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPaymentSetMethodInfoNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPaymentSetMethodInfoNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyPaymentSetMethodInfoNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyPaymentSetMethodInfoNameAction $data */
                $data = MyPaymentSetMethodInfoNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
