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
 * @extends MyPaymentUpdateActionCollection<MyPaymentAddTransactionAction>
 * @method MyPaymentAddTransactionAction current()
 * @method MyPaymentAddTransactionAction at($offset)
 */
class MyPaymentAddTransactionActionCollection extends MyPaymentUpdateActionCollection
{
    /**
     * @psalm-assert MyPaymentAddTransactionAction $value
     * @psalm-param MyPaymentAddTransactionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyPaymentAddTransactionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPaymentAddTransactionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPaymentAddTransactionAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyPaymentAddTransactionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyPaymentAddTransactionAction $data */
                $data = MyPaymentAddTransactionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
