<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of Message
 * @extends BaseResourceCollection<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method Message current()
 * @method Message end()
 * @method Message at($offset)
 */
class MessageCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
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
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?Message {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = MessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
