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
 * @extends MessageCollection<ProductTailoringUnpublishedMessage>
 * @method ProductTailoringUnpublishedMessage current()
 * @method ProductTailoringUnpublishedMessage end()
 * @method ProductTailoringUnpublishedMessage at($offset)
 */
class ProductTailoringUnpublishedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductTailoringUnpublishedMessage $value
     * @psalm-param ProductTailoringUnpublishedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringUnpublishedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringUnpublishedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringUnpublishedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringUnpublishedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringUnpublishedMessage $data */
                $data = ProductTailoringUnpublishedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
