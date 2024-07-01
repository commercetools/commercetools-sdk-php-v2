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
 * @extends MessagePayloadCollection<ProductTailoringImageAddedMessagePayload>
 * @method ProductTailoringImageAddedMessagePayload current()
 * @method ProductTailoringImageAddedMessagePayload end()
 * @method ProductTailoringImageAddedMessagePayload at($offset)
 */
class ProductTailoringImageAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductTailoringImageAddedMessagePayload $value
     * @psalm-param ProductTailoringImageAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringImageAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringImageAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringImageAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringImageAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringImageAddedMessagePayload $data */
                $data = ProductTailoringImageAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
