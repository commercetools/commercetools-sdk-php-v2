<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<OrderImportedMessagePayload>
 * @method OrderImportedMessagePayload current()
 * @method OrderImportedMessagePayload at($offset)
 */
class OrderImportedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderImportedMessagePayload $value
     * @psalm-param OrderImportedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderImportedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderImportedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderImportedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderImportedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderImportedMessagePayload $data */
                $data = OrderImportedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
