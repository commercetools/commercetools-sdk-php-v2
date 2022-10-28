<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessageCollection<ReturnInfoAddedMessage>
 * @method ReturnInfoAddedMessage current()
 * @method ReturnInfoAddedMessage end()
 * @method ReturnInfoAddedMessage at($offset)
 */
class ReturnInfoAddedMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert ReturnInfoAddedMessage $value
     * @psalm-param ReturnInfoAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReturnInfoAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReturnInfoAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReturnInfoAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ReturnInfoAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReturnInfoAddedMessage $data */
                $data = ReturnInfoAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
