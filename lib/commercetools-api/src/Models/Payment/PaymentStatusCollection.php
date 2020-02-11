<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PaymentStatus>
 * @method PaymentStatus current()
 * @method PaymentStatus at($offset)
 */
class PaymentStatusCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentStatus $value
     * @psalm-param PaymentStatus|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentStatusCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentStatus) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentStatus
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentStatus {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentStatusModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
