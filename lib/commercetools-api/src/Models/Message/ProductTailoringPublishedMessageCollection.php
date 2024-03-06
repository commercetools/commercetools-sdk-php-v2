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
 * @extends MessageCollection<ProductTailoringPublishedMessage>
 * @method ProductTailoringPublishedMessage current()
 * @method ProductTailoringPublishedMessage end()
 * @method ProductTailoringPublishedMessage at($offset)
 */
class ProductTailoringPublishedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductTailoringPublishedMessage $value
     * @psalm-param ProductTailoringPublishedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringPublishedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringPublishedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringPublishedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringPublishedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringPublishedMessage $data */
                $data = ProductTailoringPublishedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
