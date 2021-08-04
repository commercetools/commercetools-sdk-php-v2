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
 * @extends MapperSequence<PaymentMethodInfo>
 * @method PaymentMethodInfo current()
 * @method PaymentMethodInfo at($offset)
 */
class PaymentMethodInfoCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentMethodInfo $value
     * @psalm-param PaymentMethodInfo|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfo) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfo
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfo {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfo $data */
                $data = PaymentMethodInfoModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
