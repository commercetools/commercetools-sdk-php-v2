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
 * @extends MapperSequence<PaymentMethodUpdate>
 * @method PaymentMethodUpdate current()
 * @method PaymentMethodUpdate end()
 * @method PaymentMethodUpdate at($offset)
 */
class PaymentMethodUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentMethodUpdate $value
     * @psalm-param PaymentMethodUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodUpdate $data */
                $data = PaymentMethodUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
