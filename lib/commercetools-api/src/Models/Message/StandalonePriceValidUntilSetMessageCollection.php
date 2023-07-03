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
 * @extends MessageCollection<StandalonePriceValidUntilSetMessage>
 * @method StandalonePriceValidUntilSetMessage current()
 * @method StandalonePriceValidUntilSetMessage end()
 * @method StandalonePriceValidUntilSetMessage at($offset)
 */
class StandalonePriceValidUntilSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StandalonePriceValidUntilSetMessage $value
     * @psalm-param StandalonePriceValidUntilSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceValidUntilSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceValidUntilSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceValidUntilSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceValidUntilSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceValidUntilSetMessage $data */
                $data = StandalonePriceValidUntilSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
