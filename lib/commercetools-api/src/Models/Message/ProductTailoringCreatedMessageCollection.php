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
 * @extends MessageCollection<ProductTailoringCreatedMessage>
 * @method ProductTailoringCreatedMessage current()
 * @method ProductTailoringCreatedMessage end()
 * @method ProductTailoringCreatedMessage at($offset)
 */
class ProductTailoringCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductTailoringCreatedMessage $value
     * @psalm-param ProductTailoringCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringCreatedMessage $data */
                $data = ProductTailoringCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
