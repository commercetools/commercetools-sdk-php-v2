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
 * @extends MessagePayloadCollection<StandalonePriceCreatedMessagePayload>
 * @method StandalonePriceCreatedMessagePayload current()
 * @method StandalonePriceCreatedMessagePayload end()
 * @method StandalonePriceCreatedMessagePayload at($offset)
 */
class StandalonePriceCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StandalonePriceCreatedMessagePayload $value
     * @psalm-param StandalonePriceCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceCreatedMessagePayload $data */
                $data = StandalonePriceCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
