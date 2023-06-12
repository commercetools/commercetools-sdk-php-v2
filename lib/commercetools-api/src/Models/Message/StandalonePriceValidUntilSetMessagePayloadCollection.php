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
 * @extends MessagePayloadCollection<StandalonePriceValidUntilSetMessagePayload>
 * @method StandalonePriceValidUntilSetMessagePayload current()
 * @method StandalonePriceValidUntilSetMessagePayload end()
 * @method StandalonePriceValidUntilSetMessagePayload at($offset)
 */
class StandalonePriceValidUntilSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StandalonePriceValidUntilSetMessagePayload $value
     * @psalm-param StandalonePriceValidUntilSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceValidUntilSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceValidUntilSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceValidUntilSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceValidUntilSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceValidUntilSetMessagePayload $data */
                $data = StandalonePriceValidUntilSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
