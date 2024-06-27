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
 * @extends MessageCollection<ProductTailoringImageAddedMessage>
 * @method ProductTailoringImageAddedMessage current()
 * @method ProductTailoringImageAddedMessage end()
 * @method ProductTailoringImageAddedMessage at($offset)
 */
class ProductTailoringImageAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductTailoringImageAddedMessage $value
     * @psalm-param ProductTailoringImageAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringImageAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringImageAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringImageAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringImageAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringImageAddedMessage $data */
                $data = ProductTailoringImageAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
