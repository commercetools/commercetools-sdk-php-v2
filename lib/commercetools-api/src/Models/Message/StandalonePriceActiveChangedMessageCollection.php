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
 * @extends MessageCollection<StandalonePriceActiveChangedMessage>
 * @method StandalonePriceActiveChangedMessage current()
 * @method StandalonePriceActiveChangedMessage end()
 * @method StandalonePriceActiveChangedMessage at($offset)
 */
class StandalonePriceActiveChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StandalonePriceActiveChangedMessage $value
     * @psalm-param StandalonePriceActiveChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceActiveChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceActiveChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceActiveChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceActiveChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceActiveChangedMessage $data */
                $data = StandalonePriceActiveChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
