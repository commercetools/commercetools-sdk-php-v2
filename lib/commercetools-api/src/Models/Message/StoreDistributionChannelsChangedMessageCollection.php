<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<StoreDistributionChannelsChangedMessage>
 * @method StoreDistributionChannelsChangedMessage current()
 * @method StoreDistributionChannelsChangedMessage end()
 * @method StoreDistributionChannelsChangedMessage at($offset)
 */
class StoreDistributionChannelsChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StoreDistributionChannelsChangedMessage $value
     * @psalm-param StoreDistributionChannelsChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreDistributionChannelsChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreDistributionChannelsChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreDistributionChannelsChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreDistributionChannelsChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreDistributionChannelsChangedMessage $data */
                $data = StoreDistributionChannelsChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
