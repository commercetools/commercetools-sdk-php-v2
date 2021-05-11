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
 * @extends MessageCollection<ProductVariantAddedMessage>
 * @method ProductVariantAddedMessage current()
 * @method ProductVariantAddedMessage at($offset)
 */
class ProductVariantAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductVariantAddedMessage $value
     * @psalm-param ProductVariantAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantAddedMessage
     */
    protected function mapper()
    {
        return function (int $index): ?ProductVariantAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantAddedMessage $data */
                $data = ProductVariantAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
