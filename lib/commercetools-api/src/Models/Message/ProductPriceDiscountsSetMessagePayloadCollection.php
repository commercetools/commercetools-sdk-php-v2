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
 * @extends MessagePayloadCollection<ProductPriceDiscountsSetMessagePayload>
 * @method ProductPriceDiscountsSetMessagePayload current()
 * @method ProductPriceDiscountsSetMessagePayload at($offset)
 */
class ProductPriceDiscountsSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductPriceDiscountsSetMessagePayload $value
     * @psalm-param ProductPriceDiscountsSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceDiscountsSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceDiscountsSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceDiscountsSetMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?ProductPriceDiscountsSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceDiscountsSetMessagePayload $data */
                $data = ProductPriceDiscountsSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
