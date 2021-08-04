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
 * @extends MessageCollection<ProductPublishedMessage>
 * @method ProductPublishedMessage current()
 * @method ProductPublishedMessage at($offset)
 */
class ProductPublishedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductPublishedMessage $value
     * @psalm-param ProductPublishedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPublishedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPublishedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPublishedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPublishedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPublishedMessage $data */
                $data = ProductPublishedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
