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
 * @extends MessagePayloadCollection<StoreSupplyChannelsChangedMessagePayload>
 * @method StoreSupplyChannelsChangedMessagePayload current()
 * @method StoreSupplyChannelsChangedMessagePayload end()
 * @method StoreSupplyChannelsChangedMessagePayload at($offset)
 */
class StoreSupplyChannelsChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StoreSupplyChannelsChangedMessagePayload $value
     * @psalm-param StoreSupplyChannelsChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSupplyChannelsChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSupplyChannelsChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSupplyChannelsChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreSupplyChannelsChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSupplyChannelsChangedMessagePayload $data */
                $data = StoreSupplyChannelsChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
