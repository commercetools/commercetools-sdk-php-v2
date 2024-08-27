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
 * @extends OrderMessageCollection<DeliveryCustomFieldAddedMessage>
 * @method DeliveryCustomFieldAddedMessage current()
 * @method DeliveryCustomFieldAddedMessage end()
 * @method DeliveryCustomFieldAddedMessage at($offset)
 */
class DeliveryCustomFieldAddedMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert DeliveryCustomFieldAddedMessage $value
     * @psalm-param DeliveryCustomFieldAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryCustomFieldAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryCustomFieldAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryCustomFieldAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryCustomFieldAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryCustomFieldAddedMessage $data */
                $data = DeliveryCustomFieldAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
