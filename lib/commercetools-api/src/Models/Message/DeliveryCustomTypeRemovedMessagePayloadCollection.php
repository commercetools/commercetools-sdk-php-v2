<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessagePayloadCollection<DeliveryCustomTypeRemovedMessagePayload>
 * @method DeliveryCustomTypeRemovedMessagePayload current()
 * @method DeliveryCustomTypeRemovedMessagePayload end()
 * @method DeliveryCustomTypeRemovedMessagePayload at($offset)
 */
class DeliveryCustomTypeRemovedMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert DeliveryCustomTypeRemovedMessagePayload $value
     * @psalm-param DeliveryCustomTypeRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryCustomTypeRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryCustomTypeRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryCustomTypeRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryCustomTypeRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryCustomTypeRemovedMessagePayload $data */
                $data = DeliveryCustomTypeRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
