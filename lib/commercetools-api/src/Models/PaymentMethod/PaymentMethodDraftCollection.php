<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PaymentMethodDraft>
 * @method PaymentMethodDraft current()
 * @method PaymentMethodDraft end()
 * @method PaymentMethodDraft at($offset)
 */
class PaymentMethodDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentMethodDraft $value
     * @psalm-param PaymentMethodDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodDraft $data */
                $data = PaymentMethodDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
