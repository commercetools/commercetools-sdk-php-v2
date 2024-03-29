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
 * @extends MessageCollection<ProductVariantDeletedMessage>
 * @method ProductVariantDeletedMessage current()
 * @method ProductVariantDeletedMessage end()
 * @method ProductVariantDeletedMessage at($offset)
 */
class ProductVariantDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductVariantDeletedMessage $value
     * @psalm-param ProductVariantDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariantDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantDeletedMessage $data */
                $data = ProductVariantDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
