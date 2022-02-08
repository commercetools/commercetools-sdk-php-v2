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
 * @extends OrderMessageCollection<DeliveryItemsUpdatedMessage>
 * @method DeliveryItemsUpdatedMessage current()
 * @method DeliveryItemsUpdatedMessage end()
 * @method DeliveryItemsUpdatedMessage at($offset)
 */
class DeliveryItemsUpdatedMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert DeliveryItemsUpdatedMessage $value
     * @psalm-param DeliveryItemsUpdatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryItemsUpdatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryItemsUpdatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryItemsUpdatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryItemsUpdatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryItemsUpdatedMessage $data */
                $data = DeliveryItemsUpdatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
