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
 * @extends MessageCollection<StandalonePriceValidFromAndUntilSetMessage>
 * @method StandalonePriceValidFromAndUntilSetMessage current()
 * @method StandalonePriceValidFromAndUntilSetMessage end()
 * @method StandalonePriceValidFromAndUntilSetMessage at($offset)
 */
class StandalonePriceValidFromAndUntilSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StandalonePriceValidFromAndUntilSetMessage $value
     * @psalm-param StandalonePriceValidFromAndUntilSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceValidFromAndUntilSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceValidFromAndUntilSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceValidFromAndUntilSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceValidFromAndUntilSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceValidFromAndUntilSetMessage $data */
                $data = StandalonePriceValidFromAndUntilSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
