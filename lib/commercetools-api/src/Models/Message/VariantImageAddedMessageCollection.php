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
 * @extends MessageCollection<VariantImageAddedMessage>
 * @method VariantImageAddedMessage current()
 * @method VariantImageAddedMessage end()
 * @method VariantImageAddedMessage at($offset)
 */
class VariantImageAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert VariantImageAddedMessage $value
     * @psalm-param VariantImageAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantImageAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantImageAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantImageAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantImageAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantImageAddedMessage $data */
                $data = VariantImageAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
