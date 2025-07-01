<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<PaymentMethodInfoTokenSetMessage>
 * @method PaymentMethodInfoTokenSetMessage current()
 * @method PaymentMethodInfoTokenSetMessage end()
 * @method PaymentMethodInfoTokenSetMessage at($offset)
 */
class PaymentMethodInfoTokenSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodInfoTokenSetMessage $value
     * @psalm-param PaymentMethodInfoTokenSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoTokenSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoTokenSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoTokenSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoTokenSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoTokenSetMessage $data */
                $data = PaymentMethodInfoTokenSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
