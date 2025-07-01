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
 * @extends MapperSequence<PaymentMethodToken>
 * @method PaymentMethodToken current()
 * @method PaymentMethodToken end()
 * @method PaymentMethodToken at($offset)
 */
class PaymentMethodTokenCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentMethodToken $value
     * @psalm-param PaymentMethodToken|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodTokenCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodToken) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodToken
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodToken {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodToken $data */
                $data = PaymentMethodTokenModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
