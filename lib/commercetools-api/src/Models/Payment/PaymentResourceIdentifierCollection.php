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
 * @extends MapperSequence<PaymentResourceIdentifier>
 *
 * @method PaymentResourceIdentifier current()
 * @method PaymentResourceIdentifier at($offset)
 */
class PaymentResourceIdentifierCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentResourceIdentifier $value
     * @psalm-param PaymentResourceIdentifier|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return PaymentResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
