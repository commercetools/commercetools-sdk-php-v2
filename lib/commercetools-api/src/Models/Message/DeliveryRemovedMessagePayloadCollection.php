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
 * @extends MapperSequence<DeliveryRemovedMessagePayload>
 * @method DeliveryRemovedMessagePayload current()
 * @method DeliveryRemovedMessagePayload at($offset)
 */
class DeliveryRemovedMessagePayloadCollection extends MapperSequence
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
        return function (int $index): ?DeliveryRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DeliveryRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
