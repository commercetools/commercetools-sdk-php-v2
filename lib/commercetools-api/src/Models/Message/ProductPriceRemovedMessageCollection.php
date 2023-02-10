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
 * @extends MessageCollection<ProductPriceRemovedMessage>
 * @method ProductPriceRemovedMessage current()
 * @method ProductPriceRemovedMessage end()
 * @method ProductPriceRemovedMessage at($offset)
 */
class ProductPriceRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductPriceRemovedMessage $value
     * @psalm-param ProductPriceRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceRemovedMessage $data */
                $data = ProductPriceRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
