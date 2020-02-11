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
 * @extends MapperSequence<DeliveryRemovedMessage>
 * @method DeliveryRemovedMessage current()
 * @method DeliveryRemovedMessage at($offset)
 */
class DeliveryRemovedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert DeliveryRemovedMessage $value
     * @psalm-param DeliveryRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryRemovedMessage
     */
    protected function mapper()
    {
        return function (int $index): ?DeliveryRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DeliveryRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
