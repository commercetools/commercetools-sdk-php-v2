<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Message>
 * @method Message current()
 * @method Message at($offset)
 */
class MessageCollection extends MapperSequence
{
    /**
     * @psalm-assert Message $value
     * @psalm-param Message|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof Message) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Message
     */
    protected function mapper()
    {
        return function (int $index): ?Message {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
