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
 * @extends MessagePayloadCollection<ProductPricesSetMessagePayload>
 * @method ProductPricesSetMessagePayload current()
 * @method ProductPricesSetMessagePayload end()
 * @method ProductPricesSetMessagePayload at($offset)
 */
class ProductPricesSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductPricesSetMessagePayload $value
     * @psalm-param ProductPricesSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPricesSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPricesSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPricesSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPricesSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPricesSetMessagePayload $data */
                $data = ProductPricesSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
