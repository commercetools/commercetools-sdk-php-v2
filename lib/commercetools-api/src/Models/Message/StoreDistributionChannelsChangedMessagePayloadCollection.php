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
 * @extends MessagePayloadCollection<StoreDistributionChannelsChangedMessagePayload>
 * @method StoreDistributionChannelsChangedMessagePayload current()
 * @method StoreDistributionChannelsChangedMessagePayload end()
 * @method StoreDistributionChannelsChangedMessagePayload at($offset)
 */
class StoreDistributionChannelsChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StoreDistributionChannelsChangedMessagePayload $value
     * @psalm-param StoreDistributionChannelsChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreDistributionChannelsChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreDistributionChannelsChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreDistributionChannelsChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreDistributionChannelsChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreDistributionChannelsChangedMessagePayload $data */
                $data = StoreDistributionChannelsChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
