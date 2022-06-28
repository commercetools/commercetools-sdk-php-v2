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
 * @extends OrderMessageCollection<DeliveryRemovedMessage>
 * @method DeliveryRemovedMessage current()
 * @method DeliveryRemovedMessage end()
 * @method DeliveryRemovedMessage at($offset)
 */
class DeliveryRemovedMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert DeliveryRemovedMessage $value
     * @psalm-param DeliveryRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryRemovedMessage $data */
                $data = DeliveryRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
