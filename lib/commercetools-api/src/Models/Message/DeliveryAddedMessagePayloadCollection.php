<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DeliveryAddedMessagePayload>
 *
 * @method DeliveryAddedMessagePayload current()
 * @method DeliveryAddedMessagePayload at($offset)
 */
class DeliveryAddedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert DeliveryAddedMessagePayload $value
     * @psalm-param DeliveryAddedMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return DeliveryAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryAddedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?DeliveryAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DeliveryAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
