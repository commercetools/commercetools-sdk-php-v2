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
 * @extends MessagePayloadCollection<StandalonePriceValidFromSetMessagePayload>
 * @method StandalonePriceValidFromSetMessagePayload current()
 * @method StandalonePriceValidFromSetMessagePayload end()
 * @method StandalonePriceValidFromSetMessagePayload at($offset)
 */
class StandalonePriceValidFromSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StandalonePriceValidFromSetMessagePayload $value
     * @psalm-param StandalonePriceValidFromSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceValidFromSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceValidFromSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceValidFromSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceValidFromSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceValidFromSetMessagePayload $data */
                $data = StandalonePriceValidFromSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
