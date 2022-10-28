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
 * @extends MessageCollection<StoreSupplyChannelsChangedMessage>
 * @method StoreSupplyChannelsChangedMessage current()
 * @method StoreSupplyChannelsChangedMessage end()
 * @method StoreSupplyChannelsChangedMessage at($offset)
 */
class StoreSupplyChannelsChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StoreSupplyChannelsChangedMessage $value
     * @psalm-param StoreSupplyChannelsChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSupplyChannelsChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSupplyChannelsChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSupplyChannelsChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreSupplyChannelsChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSupplyChannelsChangedMessage $data */
                $data = StoreSupplyChannelsChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
