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
 * @extends MessageCollection<StandalonePriceKeySetMessage>
 * @method StandalonePriceKeySetMessage current()
 * @method StandalonePriceKeySetMessage end()
 * @method StandalonePriceKeySetMessage at($offset)
 */
class StandalonePriceKeySetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StandalonePriceKeySetMessage $value
     * @psalm-param StandalonePriceKeySetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceKeySetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceKeySetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceKeySetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceKeySetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceKeySetMessage $data */
                $data = StandalonePriceKeySetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
