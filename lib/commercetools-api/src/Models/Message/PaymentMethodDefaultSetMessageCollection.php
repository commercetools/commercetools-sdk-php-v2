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
 * @extends MessageCollection<PaymentMethodDefaultSetMessage>
 * @method PaymentMethodDefaultSetMessage current()
 * @method PaymentMethodDefaultSetMessage end()
 * @method PaymentMethodDefaultSetMessage at($offset)
 */
class PaymentMethodDefaultSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodDefaultSetMessage $value
     * @psalm-param PaymentMethodDefaultSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodDefaultSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodDefaultSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodDefaultSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodDefaultSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodDefaultSetMessage $data */
                $data = PaymentMethodDefaultSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
