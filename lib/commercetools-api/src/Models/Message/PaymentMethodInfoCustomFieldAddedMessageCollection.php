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
 * @extends MessageCollection<PaymentMethodInfoCustomFieldAddedMessage>
 * @method PaymentMethodInfoCustomFieldAddedMessage current()
 * @method PaymentMethodInfoCustomFieldAddedMessage end()
 * @method PaymentMethodInfoCustomFieldAddedMessage at($offset)
 */
class PaymentMethodInfoCustomFieldAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodInfoCustomFieldAddedMessage $value
     * @psalm-param PaymentMethodInfoCustomFieldAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoCustomFieldAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoCustomFieldAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoCustomFieldAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoCustomFieldAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoCustomFieldAddedMessage $data */
                $data = PaymentMethodInfoCustomFieldAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
