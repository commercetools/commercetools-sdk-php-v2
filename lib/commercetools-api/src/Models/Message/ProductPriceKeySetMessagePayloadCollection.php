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
 * @extends MessagePayloadCollection<ProductPriceKeySetMessagePayload>
 * @method ProductPriceKeySetMessagePayload current()
 * @method ProductPriceKeySetMessagePayload end()
 * @method ProductPriceKeySetMessagePayload at($offset)
 */
class ProductPriceKeySetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductPriceKeySetMessagePayload $value
     * @psalm-param ProductPriceKeySetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceKeySetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceKeySetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceKeySetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceKeySetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceKeySetMessagePayload $data */
                $data = ProductPriceKeySetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
