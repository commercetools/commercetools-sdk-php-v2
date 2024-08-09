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
 * @extends OrderMessageCollection<DeliveryCustomFieldRemovedMessage>
 * @method DeliveryCustomFieldRemovedMessage current()
 * @method DeliveryCustomFieldRemovedMessage end()
 * @method DeliveryCustomFieldRemovedMessage at($offset)
 */
class DeliveryCustomFieldRemovedMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert DeliveryCustomFieldRemovedMessage $value
     * @psalm-param DeliveryCustomFieldRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryCustomFieldRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryCustomFieldRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryCustomFieldRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryCustomFieldRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryCustomFieldRemovedMessage $data */
                $data = DeliveryCustomFieldRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
