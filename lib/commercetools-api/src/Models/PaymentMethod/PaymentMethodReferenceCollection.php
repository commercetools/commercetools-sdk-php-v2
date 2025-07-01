<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<PaymentMethodReference>
 * @method PaymentMethodReference current()
 * @method PaymentMethodReference end()
 * @method PaymentMethodReference at($offset)
 */
class PaymentMethodReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert PaymentMethodReference $value
     * @psalm-param PaymentMethodReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodReference
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodReference $data */
                $data = PaymentMethodReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
