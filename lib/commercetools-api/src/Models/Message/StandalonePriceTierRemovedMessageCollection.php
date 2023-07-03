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
 * @extends MessageCollection<StandalonePriceTierRemovedMessage>
 * @method StandalonePriceTierRemovedMessage current()
 * @method StandalonePriceTierRemovedMessage end()
 * @method StandalonePriceTierRemovedMessage at($offset)
 */
class StandalonePriceTierRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StandalonePriceTierRemovedMessage $value
     * @psalm-param StandalonePriceTierRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceTierRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceTierRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceTierRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceTierRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceTierRemovedMessage $data */
                $data = StandalonePriceTierRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
