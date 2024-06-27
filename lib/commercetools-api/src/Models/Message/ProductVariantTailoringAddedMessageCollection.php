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
 * @extends MessageCollection<ProductVariantTailoringAddedMessage>
 * @method ProductVariantTailoringAddedMessage current()
 * @method ProductVariantTailoringAddedMessage end()
 * @method ProductVariantTailoringAddedMessage at($offset)
 */
class ProductVariantTailoringAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductVariantTailoringAddedMessage $value
     * @psalm-param ProductVariantTailoringAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantTailoringAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantTailoringAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantTailoringAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariantTailoringAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantTailoringAddedMessage $data */
                $data = ProductVariantTailoringAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
