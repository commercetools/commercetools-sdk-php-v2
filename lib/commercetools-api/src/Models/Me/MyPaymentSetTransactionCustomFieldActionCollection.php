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
 * @extends MyPaymentUpdateActionCollection<MyPaymentSetTransactionCustomFieldAction>
 * @method MyPaymentSetTransactionCustomFieldAction current()
 * @method MyPaymentSetTransactionCustomFieldAction end()
 * @method MyPaymentSetTransactionCustomFieldAction at($offset)
 */
class MyPaymentSetTransactionCustomFieldActionCollection extends MyPaymentUpdateActionCollection
{
    /**
     * @psalm-assert MyPaymentSetTransactionCustomFieldAction $value
     * @psalm-param MyPaymentSetTransactionCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyPaymentSetTransactionCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPaymentSetTransactionCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPaymentSetTransactionCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyPaymentSetTransactionCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyPaymentSetTransactionCustomFieldAction $data */
                $data = MyPaymentSetTransactionCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
