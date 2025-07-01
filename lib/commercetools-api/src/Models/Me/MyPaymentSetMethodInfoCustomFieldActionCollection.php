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
 * @extends MyPaymentUpdateActionCollection<MyPaymentSetMethodInfoCustomFieldAction>
 * @method MyPaymentSetMethodInfoCustomFieldAction current()
 * @method MyPaymentSetMethodInfoCustomFieldAction end()
 * @method MyPaymentSetMethodInfoCustomFieldAction at($offset)
 */
class MyPaymentSetMethodInfoCustomFieldActionCollection extends MyPaymentUpdateActionCollection
{
    /**
     * @psalm-assert MyPaymentSetMethodInfoCustomFieldAction $value
     * @psalm-param MyPaymentSetMethodInfoCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyPaymentSetMethodInfoCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPaymentSetMethodInfoCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPaymentSetMethodInfoCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyPaymentSetMethodInfoCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyPaymentSetMethodInfoCustomFieldAction $data */
                $data = MyPaymentSetMethodInfoCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
