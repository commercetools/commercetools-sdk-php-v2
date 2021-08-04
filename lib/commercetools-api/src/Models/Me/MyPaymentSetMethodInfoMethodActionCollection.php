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
 * @extends MyPaymentUpdateActionCollection<MyPaymentSetMethodInfoMethodAction>
 * @method MyPaymentSetMethodInfoMethodAction current()
 * @method MyPaymentSetMethodInfoMethodAction end()
 * @method MyPaymentSetMethodInfoMethodAction at($offset)
 */
class MyPaymentSetMethodInfoMethodActionCollection extends MyPaymentUpdateActionCollection
{
    /**
     * @psalm-assert MyPaymentSetMethodInfoMethodAction $value
     * @psalm-param MyPaymentSetMethodInfoMethodAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyPaymentSetMethodInfoMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPaymentSetMethodInfoMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPaymentSetMethodInfoMethodAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyPaymentSetMethodInfoMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyPaymentSetMethodInfoMethodAction $data */
                $data = MyPaymentSetMethodInfoMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
