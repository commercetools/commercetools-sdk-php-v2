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
 * @extends MessageCollection<ProductVariantTailoringRemovedMessage>
 * @method ProductVariantTailoringRemovedMessage current()
 * @method ProductVariantTailoringRemovedMessage end()
 * @method ProductVariantTailoringRemovedMessage at($offset)
 */
class ProductVariantTailoringRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductVariantTailoringRemovedMessage $value
     * @psalm-param ProductVariantTailoringRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantTailoringRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantTailoringRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantTailoringRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariantTailoringRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantTailoringRemovedMessage $data */
                $data = ProductVariantTailoringRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
