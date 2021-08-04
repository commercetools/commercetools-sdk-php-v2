<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Payment\PaymentUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends PaymentUpdateActionCollection<PaymentAddTransactionAction>
 * @method PaymentAddTransactionAction current()
 * @method PaymentAddTransactionAction end()
 * @method PaymentAddTransactionAction at($offset)
 */
class PaymentAddTransactionActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentAddTransactionAction $value
     * @psalm-param PaymentAddTransactionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentAddTransactionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentAddTransactionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentAddTransactionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentAddTransactionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentAddTransactionAction $data */
                $data = PaymentAddTransactionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
