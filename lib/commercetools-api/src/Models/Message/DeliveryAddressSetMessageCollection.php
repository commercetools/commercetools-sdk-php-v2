<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessageCollection<DeliveryAddressSetMessage>
 * @method DeliveryAddressSetMessage current()
 * @method DeliveryAddressSetMessage end()
 * @method DeliveryAddressSetMessage at($offset)
 */
class DeliveryAddressSetMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert DeliveryAddressSetMessage $value
     * @psalm-param DeliveryAddressSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryAddressSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryAddressSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryAddressSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryAddressSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryAddressSetMessage $data */
                $data = DeliveryAddressSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
