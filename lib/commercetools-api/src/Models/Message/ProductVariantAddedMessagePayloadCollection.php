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
 * @extends MessagePayloadCollection<ProductVariantAddedMessagePayload>
 * @method ProductVariantAddedMessagePayload current()
 * @method ProductVariantAddedMessagePayload at($offset)
 */
class ProductVariantAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductVariantAddedMessagePayload $value
     * @psalm-param ProductVariantAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantAddedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?ProductVariantAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantAddedMessagePayload $data */
                $data = ProductVariantAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
