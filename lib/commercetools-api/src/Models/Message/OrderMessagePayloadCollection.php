<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of OrderMessagePayload
 * @extends MessagePayloadCollection<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method OrderMessagePayload current()
 * @method OrderMessagePayload end()
 * @method OrderMessagePayload at($offset)
 */
class OrderMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderMessagePayload) {
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
        return function (?int $index): ?OrderMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = OrderMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
