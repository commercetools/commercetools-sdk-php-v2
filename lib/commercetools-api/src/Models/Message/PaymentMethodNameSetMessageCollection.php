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
 * @extends MessageCollection<PaymentMethodNameSetMessage>
 * @method PaymentMethodNameSetMessage current()
 * @method PaymentMethodNameSetMessage end()
 * @method PaymentMethodNameSetMessage at($offset)
 */
class PaymentMethodNameSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodNameSetMessage $value
     * @psalm-param PaymentMethodNameSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodNameSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodNameSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodNameSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodNameSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodNameSetMessage $data */
                $data = PaymentMethodNameSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
