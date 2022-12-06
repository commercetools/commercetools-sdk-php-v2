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
 * @extends MessageCollection<ProductPriceSetMessage>
 * @method ProductPriceSetMessage current()
 * @method ProductPriceSetMessage end()
 * @method ProductPriceSetMessage at($offset)
 */
class ProductPriceSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductPriceSetMessage $value
     * @psalm-param ProductPriceSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceSetMessage $data */
                $data = ProductPriceSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
