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
 * @extends MessageCollection<PaymentMethodCustomTypeSetMessage>
 * @method PaymentMethodCustomTypeSetMessage current()
 * @method PaymentMethodCustomTypeSetMessage end()
 * @method PaymentMethodCustomTypeSetMessage at($offset)
 */
class PaymentMethodCustomTypeSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodCustomTypeSetMessage $value
     * @psalm-param PaymentMethodCustomTypeSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodCustomTypeSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodCustomTypeSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodCustomTypeSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodCustomTypeSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodCustomTypeSetMessage $data */
                $data = PaymentMethodCustomTypeSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
