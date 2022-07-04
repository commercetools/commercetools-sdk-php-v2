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
 * @extends MessagePayloadCollection<ProductSelectionVariantSelectionChangedMessagePayload>
 * @method ProductSelectionVariantSelectionChangedMessagePayload current()
 * @method ProductSelectionVariantSelectionChangedMessagePayload end()
 * @method ProductSelectionVariantSelectionChangedMessagePayload at($offset)
 */
class ProductSelectionVariantSelectionChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductSelectionVariantSelectionChangedMessagePayload $value
     * @psalm-param ProductSelectionVariantSelectionChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionVariantSelectionChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionVariantSelectionChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionVariantSelectionChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionVariantSelectionChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionVariantSelectionChangedMessagePayload $data */
                $data = ProductSelectionVariantSelectionChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
