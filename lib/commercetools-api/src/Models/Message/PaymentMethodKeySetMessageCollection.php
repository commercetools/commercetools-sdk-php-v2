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
 * @extends MessageCollection<PaymentMethodKeySetMessage>
 * @method PaymentMethodKeySetMessage current()
 * @method PaymentMethodKeySetMessage end()
 * @method PaymentMethodKeySetMessage at($offset)
 */
class PaymentMethodKeySetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodKeySetMessage $value
     * @psalm-param PaymentMethodKeySetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodKeySetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodKeySetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodKeySetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodKeySetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodKeySetMessage $data */
                $data = PaymentMethodKeySetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
