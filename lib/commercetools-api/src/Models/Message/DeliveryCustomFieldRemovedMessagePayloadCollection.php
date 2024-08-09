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
 * @extends OrderMessagePayloadCollection<DeliveryCustomFieldRemovedMessagePayload>
 * @method DeliveryCustomFieldRemovedMessagePayload current()
 * @method DeliveryCustomFieldRemovedMessagePayload end()
 * @method DeliveryCustomFieldRemovedMessagePayload at($offset)
 */
class DeliveryCustomFieldRemovedMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert DeliveryCustomFieldRemovedMessagePayload $value
     * @psalm-param DeliveryCustomFieldRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryCustomFieldRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryCustomFieldRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryCustomFieldRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryCustomFieldRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryCustomFieldRemovedMessagePayload $data */
                $data = DeliveryCustomFieldRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
