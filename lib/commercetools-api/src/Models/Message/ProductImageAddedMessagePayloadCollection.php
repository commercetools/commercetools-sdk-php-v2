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
 * @extends MessagePayloadCollection<ProductImageAddedMessagePayload>
 * @method ProductImageAddedMessagePayload current()
 * @method ProductImageAddedMessagePayload end()
 * @method ProductImageAddedMessagePayload at($offset)
 */
class ProductImageAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductImageAddedMessagePayload $value
     * @psalm-param ProductImageAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductImageAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductImageAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductImageAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductImageAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductImageAddedMessagePayload $data */
                $data = ProductImageAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
