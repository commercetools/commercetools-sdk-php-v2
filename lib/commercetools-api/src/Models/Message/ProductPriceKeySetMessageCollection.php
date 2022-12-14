<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<ProductPriceKeySetMessage>
 * @method ProductPriceKeySetMessage current()
 * @method ProductPriceKeySetMessage end()
 * @method ProductPriceKeySetMessage at($offset)
 */
class ProductPriceKeySetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductPriceKeySetMessage $value
     * @psalm-param ProductPriceKeySetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceKeySetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceKeySetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceKeySetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceKeySetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceKeySetMessage $data */
                $data = ProductPriceKeySetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
