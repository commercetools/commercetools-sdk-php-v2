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
 * @extends MessageCollection<StandalonePriceValidFromSetMessage>
 * @method StandalonePriceValidFromSetMessage current()
 * @method StandalonePriceValidFromSetMessage end()
 * @method StandalonePriceValidFromSetMessage at($offset)
 */
class StandalonePriceValidFromSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StandalonePriceValidFromSetMessage $value
     * @psalm-param StandalonePriceValidFromSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceValidFromSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceValidFromSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceValidFromSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceValidFromSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceValidFromSetMessage $data */
                $data = StandalonePriceValidFromSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
