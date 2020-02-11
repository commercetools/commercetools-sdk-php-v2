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
 * @extends MapperSequence<DeliveryAddedMessage>
 * @method DeliveryAddedMessage current()
 * @method DeliveryAddedMessage at($offset)
 */
class DeliveryAddedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert DeliveryAddedMessage $value
     * @psalm-param DeliveryAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryAddedMessage
     */
    protected function mapper()
    {
        return function (int $index): ?DeliveryAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DeliveryAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
