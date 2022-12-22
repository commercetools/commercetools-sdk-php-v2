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
 * @extends MessagePayloadCollection<ProductPriceChangedMessagePayload>
 * @method ProductPriceChangedMessagePayload current()
 * @method ProductPriceChangedMessagePayload end()
 * @method ProductPriceChangedMessagePayload at($offset)
 */
class ProductPriceChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductPriceChangedMessagePayload $value
     * @psalm-param ProductPriceChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceChangedMessagePayload $data */
                $data = ProductPriceChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
