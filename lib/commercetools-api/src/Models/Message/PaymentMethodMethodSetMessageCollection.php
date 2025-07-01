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
 * @extends MessageCollection<PaymentMethodMethodSetMessage>
 * @method PaymentMethodMethodSetMessage current()
 * @method PaymentMethodMethodSetMessage end()
 * @method PaymentMethodMethodSetMessage at($offset)
 */
class PaymentMethodMethodSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodMethodSetMessage $value
     * @psalm-param PaymentMethodMethodSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodMethodSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodMethodSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodMethodSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodMethodSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodMethodSetMessage $data */
                $data = PaymentMethodMethodSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
