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
 * @extends MessagePayloadCollection<StandalonePriceValidFromAndUntilSetMessagePayload>
 * @method StandalonePriceValidFromAndUntilSetMessagePayload current()
 * @method StandalonePriceValidFromAndUntilSetMessagePayload end()
 * @method StandalonePriceValidFromAndUntilSetMessagePayload at($offset)
 */
class StandalonePriceValidFromAndUntilSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StandalonePriceValidFromAndUntilSetMessagePayload $value
     * @psalm-param StandalonePriceValidFromAndUntilSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceValidFromAndUntilSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceValidFromAndUntilSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceValidFromAndUntilSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceValidFromAndUntilSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceValidFromAndUntilSetMessagePayload $data */
                $data = StandalonePriceValidFromAndUntilSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
