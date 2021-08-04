<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<DeliveryRemovedMessagePayload>
 * @method DeliveryRemovedMessagePayload current()
 * @method DeliveryRemovedMessagePayload end()
 * @method DeliveryRemovedMessagePayload at($offset)
 */
class DeliveryRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert DeliveryRemovedMessagePayload $value
     * @psalm-param DeliveryRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryRemovedMessagePayload $data */
                $data = DeliveryRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
