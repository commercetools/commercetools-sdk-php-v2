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
 * @extends MessagePayloadCollection<ProductPriceSetMessagePayload>
 * @method ProductPriceSetMessagePayload current()
 * @method ProductPriceSetMessagePayload end()
 * @method ProductPriceSetMessagePayload at($offset)
 */
class ProductPriceSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductPriceSetMessagePayload $value
     * @psalm-param ProductPriceSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceSetMessagePayload $data */
                $data = ProductPriceSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
