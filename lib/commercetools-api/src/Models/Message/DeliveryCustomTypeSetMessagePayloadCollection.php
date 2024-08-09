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
 * @extends OrderMessagePayloadCollection<DeliveryCustomTypeSetMessagePayload>
 * @method DeliveryCustomTypeSetMessagePayload current()
 * @method DeliveryCustomTypeSetMessagePayload end()
 * @method DeliveryCustomTypeSetMessagePayload at($offset)
 */
class DeliveryCustomTypeSetMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert DeliveryCustomTypeSetMessagePayload $value
     * @psalm-param DeliveryCustomTypeSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryCustomTypeSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryCustomTypeSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryCustomTypeSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryCustomTypeSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryCustomTypeSetMessagePayload $data */
                $data = DeliveryCustomTypeSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
