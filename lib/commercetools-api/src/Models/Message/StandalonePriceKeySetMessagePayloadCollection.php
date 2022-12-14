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
 * @extends MessagePayloadCollection<StandalonePriceKeySetMessagePayload>
 * @method StandalonePriceKeySetMessagePayload current()
 * @method StandalonePriceKeySetMessagePayload end()
 * @method StandalonePriceKeySetMessagePayload at($offset)
 */
class StandalonePriceKeySetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StandalonePriceKeySetMessagePayload $value
     * @psalm-param StandalonePriceKeySetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceKeySetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceKeySetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceKeySetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceKeySetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceKeySetMessagePayload $data */
                $data = StandalonePriceKeySetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
