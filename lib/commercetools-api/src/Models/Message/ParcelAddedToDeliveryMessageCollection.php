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
 * @extends MapperSequence<ParcelAddedToDeliveryMessage>
 *
 * @method ParcelAddedToDeliveryMessage current()
 * @method ParcelAddedToDeliveryMessage at($offset)
 */
class ParcelAddedToDeliveryMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert ParcelAddedToDeliveryMessage $value
     * @psalm-param ParcelAddedToDeliveryMessage|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ParcelAddedToDeliveryMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ParcelAddedToDeliveryMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelAddedToDeliveryMessage
     */
    protected function mapper()
    {
        return function (int $index): ?ParcelAddedToDeliveryMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ParcelAddedToDeliveryMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
