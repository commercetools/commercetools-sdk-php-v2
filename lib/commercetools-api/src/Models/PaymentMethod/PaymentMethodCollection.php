<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<PaymentMethod>
 * @method PaymentMethod current()
 * @method PaymentMethod end()
 * @method PaymentMethod at($offset)
 */
class PaymentMethodCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert PaymentMethod $value
     * @psalm-param PaymentMethod|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethod) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethod
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethod {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethod $data */
                $data = PaymentMethodModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
