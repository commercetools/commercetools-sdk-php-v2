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
 * @extends MessageCollection<ProductPriceAddedMessage>
 * @method ProductPriceAddedMessage current()
 * @method ProductPriceAddedMessage end()
 * @method ProductPriceAddedMessage at($offset)
 */
class ProductPriceAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductPriceAddedMessage $value
     * @psalm-param ProductPriceAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceAddedMessage $data */
                $data = ProductPriceAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
