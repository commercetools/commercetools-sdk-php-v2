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
 * @extends MessagePayloadCollection<ProductVariantTailoringAddedMessagePayload>
 * @method ProductVariantTailoringAddedMessagePayload current()
 * @method ProductVariantTailoringAddedMessagePayload end()
 * @method ProductVariantTailoringAddedMessagePayload at($offset)
 */
class ProductVariantTailoringAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductVariantTailoringAddedMessagePayload $value
     * @psalm-param ProductVariantTailoringAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantTailoringAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantTailoringAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantTailoringAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariantTailoringAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantTailoringAddedMessagePayload $data */
                $data = ProductVariantTailoringAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
