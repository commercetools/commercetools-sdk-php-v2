<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessagePayloadCollection<ReturnInfoAddedMessagePayload>
 * @method ReturnInfoAddedMessagePayload current()
 * @method ReturnInfoAddedMessagePayload end()
 * @method ReturnInfoAddedMessagePayload at($offset)
 */
class ReturnInfoAddedMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert ReturnInfoAddedMessagePayload $value
     * @psalm-param ReturnInfoAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReturnInfoAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReturnInfoAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReturnInfoAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ReturnInfoAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReturnInfoAddedMessagePayload $data */
                $data = ReturnInfoAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
