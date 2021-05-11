<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<Payment>
 * @method Payment current()
 * @method Payment at($offset)
 */
class PaymentCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert Payment $value
     * @psalm-param Payment|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentCollection
     */
    public function add($value)
    {
        if (!$value instanceof Payment) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Payment
     */
    protected function mapper()
    {
        return function (int $index): ?Payment {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Payment $data */
                $data = PaymentModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
