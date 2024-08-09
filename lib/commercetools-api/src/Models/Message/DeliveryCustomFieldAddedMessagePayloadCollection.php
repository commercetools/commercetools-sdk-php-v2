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
 * @extends OrderMessagePayloadCollection<DeliveryCustomFieldAddedMessagePayload>
 * @method DeliveryCustomFieldAddedMessagePayload current()
 * @method DeliveryCustomFieldAddedMessagePayload end()
 * @method DeliveryCustomFieldAddedMessagePayload at($offset)
 */
class DeliveryCustomFieldAddedMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert DeliveryCustomFieldAddedMessagePayload $value
     * @psalm-param DeliveryCustomFieldAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryCustomFieldAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryCustomFieldAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryCustomFieldAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryCustomFieldAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryCustomFieldAddedMessagePayload $data */
                $data = DeliveryCustomFieldAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
