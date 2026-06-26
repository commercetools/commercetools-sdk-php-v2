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
 * @extends MessagePayloadCollection<VariantImageAddedMessagePayload>
 * @method VariantImageAddedMessagePayload current()
 * @method VariantImageAddedMessagePayload end()
 * @method VariantImageAddedMessagePayload at($offset)
 */
class VariantImageAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert VariantImageAddedMessagePayload $value
     * @psalm-param VariantImageAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantImageAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantImageAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantImageAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantImageAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantImageAddedMessagePayload $data */
                $data = VariantImageAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
