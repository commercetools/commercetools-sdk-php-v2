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
 * @extends MessagePayloadCollection<ProductSelectionVariantExclusionChangedMessagePayload>
 * @method ProductSelectionVariantExclusionChangedMessagePayload current()
 * @method ProductSelectionVariantExclusionChangedMessagePayload end()
 * @method ProductSelectionVariantExclusionChangedMessagePayload at($offset)
 */
class ProductSelectionVariantExclusionChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductSelectionVariantExclusionChangedMessagePayload $value
     * @psalm-param ProductSelectionVariantExclusionChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionVariantExclusionChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionVariantExclusionChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionVariantExclusionChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionVariantExclusionChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionVariantExclusionChangedMessagePayload $data */
                $data = ProductSelectionVariantExclusionChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
