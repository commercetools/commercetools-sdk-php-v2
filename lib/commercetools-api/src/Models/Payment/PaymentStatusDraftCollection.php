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
 * @extends MapperSequence<PaymentStatusDraft>
 * @method PaymentStatusDraft current()
 * @method PaymentStatusDraft at($offset)
 */
class PaymentStatusDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentStatusDraft $value
     * @psalm-param PaymentStatusDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentStatusDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentStatusDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentStatusDraft
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentStatusDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentStatusDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
