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
 * @extends MessagePayloadCollection<StandalonePriceValueChangedMessagePayload>
 * @method StandalonePriceValueChangedMessagePayload current()
 * @method StandalonePriceValueChangedMessagePayload end()
 * @method StandalonePriceValueChangedMessagePayload at($offset)
 */
class StandalonePriceValueChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StandalonePriceValueChangedMessagePayload $value
     * @psalm-param StandalonePriceValueChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceValueChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceValueChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceValueChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceValueChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceValueChangedMessagePayload $data */
                $data = StandalonePriceValueChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
