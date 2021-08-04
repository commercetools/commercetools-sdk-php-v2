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
 * @extends MessageCollection<DeliveryAddedMessage>
 * @method DeliveryAddedMessage current()
 * @method DeliveryAddedMessage end()
 * @method DeliveryAddedMessage at($offset)
 */
class DeliveryAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert DeliveryAddedMessage $value
     * @psalm-param DeliveryAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryAddedMessage $data */
                $data = DeliveryAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
