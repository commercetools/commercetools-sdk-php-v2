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
 * @extends MessageCollection<PaymentMethodCreatedMessage>
 * @method PaymentMethodCreatedMessage current()
 * @method PaymentMethodCreatedMessage end()
 * @method PaymentMethodCreatedMessage at($offset)
 */
class PaymentMethodCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodCreatedMessage $value
     * @psalm-param PaymentMethodCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodCreatedMessage $data */
                $data = PaymentMethodCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
