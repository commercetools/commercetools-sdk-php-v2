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
 * @extends MessageCollection<StandalonePriceCreatedMessage>
 * @method StandalonePriceCreatedMessage current()
 * @method StandalonePriceCreatedMessage end()
 * @method StandalonePriceCreatedMessage at($offset)
 */
class StandalonePriceCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StandalonePriceCreatedMessage $value
     * @psalm-param StandalonePriceCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceCreatedMessage $data */
                $data = StandalonePriceCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
