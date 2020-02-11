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
 * @extends MapperSequence<PaymentDraft>
 * @method PaymentDraft current()
 * @method PaymentDraft at($offset)
 */
class PaymentDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentDraft $value
     * @psalm-param PaymentDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentDraft
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
