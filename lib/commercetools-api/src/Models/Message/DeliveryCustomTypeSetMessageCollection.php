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
 * @extends OrderMessageCollection<DeliveryCustomTypeSetMessage>
 * @method DeliveryCustomTypeSetMessage current()
 * @method DeliveryCustomTypeSetMessage end()
 * @method DeliveryCustomTypeSetMessage at($offset)
 */
class DeliveryCustomTypeSetMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert DeliveryCustomTypeSetMessage $value
     * @psalm-param DeliveryCustomTypeSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryCustomTypeSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryCustomTypeSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryCustomTypeSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryCustomTypeSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryCustomTypeSetMessage $data */
                $data = DeliveryCustomTypeSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
