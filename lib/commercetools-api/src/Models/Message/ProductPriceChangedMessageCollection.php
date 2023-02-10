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
 * @extends MessageCollection<ProductPriceChangedMessage>
 * @method ProductPriceChangedMessage current()
 * @method ProductPriceChangedMessage end()
 * @method ProductPriceChangedMessage at($offset)
 */
class ProductPriceChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductPriceChangedMessage $value
     * @psalm-param ProductPriceChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceChangedMessage $data */
                $data = ProductPriceChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
