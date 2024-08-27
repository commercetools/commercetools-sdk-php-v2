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
 * @extends OrderMessagePayloadCollection<DeliveryCustomFieldChangedMessagePayload>
 * @method DeliveryCustomFieldChangedMessagePayload current()
 * @method DeliveryCustomFieldChangedMessagePayload end()
 * @method DeliveryCustomFieldChangedMessagePayload at($offset)
 */
class DeliveryCustomFieldChangedMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert DeliveryCustomFieldChangedMessagePayload $value
     * @psalm-param DeliveryCustomFieldChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryCustomFieldChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryCustomFieldChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryCustomFieldChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryCustomFieldChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryCustomFieldChangedMessagePayload $data */
                $data = DeliveryCustomFieldChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
