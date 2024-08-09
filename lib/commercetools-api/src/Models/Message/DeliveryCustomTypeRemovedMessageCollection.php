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
 * @extends OrderMessageCollection<DeliveryCustomTypeRemovedMessage>
 * @method DeliveryCustomTypeRemovedMessage current()
 * @method DeliveryCustomTypeRemovedMessage end()
 * @method DeliveryCustomTypeRemovedMessage at($offset)
 */
class DeliveryCustomTypeRemovedMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert DeliveryCustomTypeRemovedMessage $value
     * @psalm-param DeliveryCustomTypeRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryCustomTypeRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryCustomTypeRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryCustomTypeRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryCustomTypeRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryCustomTypeRemovedMessage $data */
                $data = DeliveryCustomTypeRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
