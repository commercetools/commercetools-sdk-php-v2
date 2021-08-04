<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<ProductVariantDeletedMessagePayload>
 * @method ProductVariantDeletedMessagePayload current()
 * @method ProductVariantDeletedMessagePayload at($offset)
 */
class ProductVariantDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductVariantDeletedMessagePayload $value
     * @psalm-param ProductVariantDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariantDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantDeletedMessagePayload $data */
                $data = ProductVariantDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
