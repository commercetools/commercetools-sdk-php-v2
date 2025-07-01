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
 * @extends MessageCollection<PaymentMethodCustomFieldAddedMessage>
 * @method PaymentMethodCustomFieldAddedMessage current()
 * @method PaymentMethodCustomFieldAddedMessage end()
 * @method PaymentMethodCustomFieldAddedMessage at($offset)
 */
class PaymentMethodCustomFieldAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodCustomFieldAddedMessage $value
     * @psalm-param PaymentMethodCustomFieldAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodCustomFieldAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodCustomFieldAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodCustomFieldAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodCustomFieldAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodCustomFieldAddedMessage $data */
                $data = PaymentMethodCustomFieldAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
