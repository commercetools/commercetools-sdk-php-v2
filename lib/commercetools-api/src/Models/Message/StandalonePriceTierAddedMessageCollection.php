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
 * @extends MessageCollection<StandalonePriceTierAddedMessage>
 * @method StandalonePriceTierAddedMessage current()
 * @method StandalonePriceTierAddedMessage end()
 * @method StandalonePriceTierAddedMessage at($offset)
 */
class StandalonePriceTierAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StandalonePriceTierAddedMessage $value
     * @psalm-param StandalonePriceTierAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceTierAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceTierAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceTierAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceTierAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceTierAddedMessage $data */
                $data = StandalonePriceTierAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
