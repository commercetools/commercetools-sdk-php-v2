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
 * @extends MessagePayloadCollection<StoreCreatedMessagePayload>
 * @method StoreCreatedMessagePayload current()
 * @method StoreCreatedMessagePayload end()
 * @method StoreCreatedMessagePayload at($offset)
 */
class StoreCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StoreCreatedMessagePayload $value
     * @psalm-param StoreCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreCreatedMessagePayload $data */
                $data = StoreCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
