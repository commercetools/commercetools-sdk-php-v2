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
 * @extends MessagePayloadCollection<ProductPriceRemovedMessagePayload>
 * @method ProductPriceRemovedMessagePayload current()
 * @method ProductPriceRemovedMessagePayload end()
 * @method ProductPriceRemovedMessagePayload at($offset)
 */
class ProductPriceRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductPriceRemovedMessagePayload $value
     * @psalm-param ProductPriceRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceRemovedMessagePayload $data */
                $data = ProductPriceRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
