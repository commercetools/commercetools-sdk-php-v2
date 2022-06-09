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
 * @extends MessageCollection<StandalonePriceValueChangedMessage>
 * @method StandalonePriceValueChangedMessage current()
 * @method StandalonePriceValueChangedMessage end()
 * @method StandalonePriceValueChangedMessage at($offset)
 */
class StandalonePriceValueChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StandalonePriceValueChangedMessage $value
     * @psalm-param StandalonePriceValueChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceValueChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceValueChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceValueChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceValueChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceValueChangedMessage $data */
                $data = StandalonePriceValueChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
