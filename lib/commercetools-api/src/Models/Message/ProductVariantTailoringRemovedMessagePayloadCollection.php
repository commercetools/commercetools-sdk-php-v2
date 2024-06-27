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
 * @extends MessagePayloadCollection<ProductVariantTailoringRemovedMessagePayload>
 * @method ProductVariantTailoringRemovedMessagePayload current()
 * @method ProductVariantTailoringRemovedMessagePayload end()
 * @method ProductVariantTailoringRemovedMessagePayload at($offset)
 */
class ProductVariantTailoringRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductVariantTailoringRemovedMessagePayload $value
     * @psalm-param ProductVariantTailoringRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantTailoringRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantTailoringRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantTailoringRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariantTailoringRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantTailoringRemovedMessagePayload $data */
                $data = ProductVariantTailoringRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
