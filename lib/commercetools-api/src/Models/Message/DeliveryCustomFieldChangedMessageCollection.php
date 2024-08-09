<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessageCollection<DeliveryCustomFieldChangedMessage>
 * @method DeliveryCustomFieldChangedMessage current()
 * @method DeliveryCustomFieldChangedMessage end()
 * @method DeliveryCustomFieldChangedMessage at($offset)
 */
class DeliveryCustomFieldChangedMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert DeliveryCustomFieldChangedMessage $value
     * @psalm-param DeliveryCustomFieldChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryCustomFieldChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryCustomFieldChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryCustomFieldChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryCustomFieldChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryCustomFieldChangedMessage $data */
                $data = DeliveryCustomFieldChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
