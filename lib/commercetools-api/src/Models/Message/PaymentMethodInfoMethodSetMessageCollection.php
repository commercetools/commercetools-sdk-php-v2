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
 * @extends MessageCollection<PaymentMethodInfoMethodSetMessage>
 * @method PaymentMethodInfoMethodSetMessage current()
 * @method PaymentMethodInfoMethodSetMessage end()
 * @method PaymentMethodInfoMethodSetMessage at($offset)
 */
class PaymentMethodInfoMethodSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodInfoMethodSetMessage $value
     * @psalm-param PaymentMethodInfoMethodSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoMethodSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoMethodSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoMethodSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoMethodSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoMethodSetMessage $data */
                $data = PaymentMethodInfoMethodSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
