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
 * @extends MessagePayloadCollection<ProductPriceAddedMessagePayload>
 * @method ProductPriceAddedMessagePayload current()
 * @method ProductPriceAddedMessagePayload end()
 * @method ProductPriceAddedMessagePayload at($offset)
 */
class ProductPriceAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductPriceAddedMessagePayload $value
     * @psalm-param ProductPriceAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceAddedMessagePayload $data */
                $data = ProductPriceAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
