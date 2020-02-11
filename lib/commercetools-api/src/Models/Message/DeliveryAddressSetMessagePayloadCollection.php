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
 * @extends MapperSequence<DeliveryAddressSetMessagePayload>
 * @method DeliveryAddressSetMessagePayload current()
 * @method DeliveryAddressSetMessagePayload at($offset)
 */
class DeliveryAddressSetMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert DeliveryAddressSetMessagePayload $value
     * @psalm-param DeliveryAddressSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryAddressSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryAddressSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryAddressSetMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?DeliveryAddressSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DeliveryAddressSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
