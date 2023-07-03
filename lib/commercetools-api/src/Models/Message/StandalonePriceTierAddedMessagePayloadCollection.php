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
 * @extends MessagePayloadCollection<StandalonePriceTierAddedMessagePayload>
 * @method StandalonePriceTierAddedMessagePayload current()
 * @method StandalonePriceTierAddedMessagePayload end()
 * @method StandalonePriceTierAddedMessagePayload at($offset)
 */
class StandalonePriceTierAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StandalonePriceTierAddedMessagePayload $value
     * @psalm-param StandalonePriceTierAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceTierAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceTierAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceTierAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceTierAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceTierAddedMessagePayload $data */
                $data = StandalonePriceTierAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
