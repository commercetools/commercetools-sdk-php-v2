<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<PaymentReference>
 * @method PaymentReference current()
 * @method PaymentReference at($offset)
 */
class PaymentReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert PaymentReference $value
     * @psalm-param PaymentReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentReference
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentReference $data */
                $data = PaymentReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
