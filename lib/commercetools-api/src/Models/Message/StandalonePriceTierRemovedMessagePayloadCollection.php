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
 * @extends MessagePayloadCollection<StandalonePriceTierRemovedMessagePayload>
 * @method StandalonePriceTierRemovedMessagePayload current()
 * @method StandalonePriceTierRemovedMessagePayload end()
 * @method StandalonePriceTierRemovedMessagePayload at($offset)
 */
class StandalonePriceTierRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StandalonePriceTierRemovedMessagePayload $value
     * @psalm-param StandalonePriceTierRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceTierRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceTierRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceTierRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceTierRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceTierRemovedMessagePayload $data */
                $data = StandalonePriceTierRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
