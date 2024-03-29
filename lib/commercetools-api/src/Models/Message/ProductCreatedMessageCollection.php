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
 * @extends MessageCollection<ProductCreatedMessage>
 * @method ProductCreatedMessage current()
 * @method ProductCreatedMessage end()
 * @method ProductCreatedMessage at($offset)
 */
class ProductCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductCreatedMessage $value
     * @psalm-param ProductCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductCreatedMessage $data */
                $data = ProductCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
