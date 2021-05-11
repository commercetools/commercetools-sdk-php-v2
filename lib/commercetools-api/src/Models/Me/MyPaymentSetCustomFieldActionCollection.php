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
 * @extends MyPaymentUpdateActionCollection<MyPaymentSetCustomFieldAction>
 * @method MyPaymentSetCustomFieldAction current()
 * @method MyPaymentSetCustomFieldAction at($offset)
 */
class MyPaymentSetCustomFieldActionCollection extends MyPaymentUpdateActionCollection
{
    /**
     * @psalm-assert MyPaymentSetCustomFieldAction $value
     * @psalm-param MyPaymentSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyPaymentSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPaymentSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPaymentSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyPaymentSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyPaymentSetCustomFieldAction $data */
                $data = MyPaymentSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
