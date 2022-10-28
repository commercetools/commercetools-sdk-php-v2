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
 * @extends MessagePayloadCollection<StandalonePriceActiveChangedMessagePayload>
 * @method StandalonePriceActiveChangedMessagePayload current()
 * @method StandalonePriceActiveChangedMessagePayload end()
 * @method StandalonePriceActiveChangedMessagePayload at($offset)
 */
class StandalonePriceActiveChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StandalonePriceActiveChangedMessagePayload $value
     * @psalm-param StandalonePriceActiveChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceActiveChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceActiveChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceActiveChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceActiveChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceActiveChangedMessagePayload $data */
                $data = StandalonePriceActiveChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
