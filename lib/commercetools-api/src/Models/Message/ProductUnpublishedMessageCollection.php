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
 * @extends MessageCollection<ProductUnpublishedMessage>
 * @method ProductUnpublishedMessage current()
 * @method ProductUnpublishedMessage at($offset)
 */
class ProductUnpublishedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductUnpublishedMessage $value
     * @psalm-param ProductUnpublishedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductUnpublishedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductUnpublishedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductUnpublishedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductUnpublishedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductUnpublishedMessage $data */
                $data = ProductUnpublishedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
