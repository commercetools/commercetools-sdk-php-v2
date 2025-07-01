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
 * @extends MapperSequence<PaymentMethodInfoDraft>
 * @method PaymentMethodInfoDraft current()
 * @method PaymentMethodInfoDraft end()
 * @method PaymentMethodInfoDraft at($offset)
 */
class PaymentMethodInfoDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentMethodInfoDraft $value
     * @psalm-param PaymentMethodInfoDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoDraft $data */
                $data = PaymentMethodInfoDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
