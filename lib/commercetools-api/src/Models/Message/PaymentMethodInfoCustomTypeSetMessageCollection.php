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
 * @extends MessageCollection<PaymentMethodInfoCustomTypeSetMessage>
 * @method PaymentMethodInfoCustomTypeSetMessage current()
 * @method PaymentMethodInfoCustomTypeSetMessage end()
 * @method PaymentMethodInfoCustomTypeSetMessage at($offset)
 */
class PaymentMethodInfoCustomTypeSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodInfoCustomTypeSetMessage $value
     * @psalm-param PaymentMethodInfoCustomTypeSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoCustomTypeSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoCustomTypeSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoCustomTypeSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoCustomTypeSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoCustomTypeSetMessage $data */
                $data = PaymentMethodInfoCustomTypeSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
