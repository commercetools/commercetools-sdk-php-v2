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
 * @extends MessageCollection<PaymentMethodInfoNameSetMessage>
 * @method PaymentMethodInfoNameSetMessage current()
 * @method PaymentMethodInfoNameSetMessage end()
 * @method PaymentMethodInfoNameSetMessage at($offset)
 */
class PaymentMethodInfoNameSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodInfoNameSetMessage $value
     * @psalm-param PaymentMethodInfoNameSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoNameSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoNameSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoNameSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoNameSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoNameSetMessage $data */
                $data = PaymentMethodInfoNameSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
