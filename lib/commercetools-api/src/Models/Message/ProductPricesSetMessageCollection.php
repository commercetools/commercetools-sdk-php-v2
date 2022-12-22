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
 * @extends MessageCollection<ProductPricesSetMessage>
 * @method ProductPricesSetMessage current()
 * @method ProductPricesSetMessage end()
 * @method ProductPricesSetMessage at($offset)
 */
class ProductPricesSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductPricesSetMessage $value
     * @psalm-param ProductPricesSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPricesSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPricesSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPricesSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPricesSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPricesSetMessage $data */
                $data = ProductPricesSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
