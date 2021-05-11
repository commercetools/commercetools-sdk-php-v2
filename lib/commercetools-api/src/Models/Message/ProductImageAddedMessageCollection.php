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
 * @extends MessageCollection<ProductImageAddedMessage>
 * @method ProductImageAddedMessage current()
 * @method ProductImageAddedMessage at($offset)
 */
class ProductImageAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductImageAddedMessage $value
     * @psalm-param ProductImageAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductImageAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductImageAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductImageAddedMessage
     */
    protected function mapper()
    {
        return function (int $index): ?ProductImageAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductImageAddedMessage $data */
                $data = ProductImageAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
