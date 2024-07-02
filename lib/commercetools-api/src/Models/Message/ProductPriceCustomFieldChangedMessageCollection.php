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
 * @extends MessageCollection<ProductPriceCustomFieldChangedMessage>
 * @method ProductPriceCustomFieldChangedMessage current()
 * @method ProductPriceCustomFieldChangedMessage end()
 * @method ProductPriceCustomFieldChangedMessage at($offset)
 */
class ProductPriceCustomFieldChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductPriceCustomFieldChangedMessage $value
     * @psalm-param ProductPriceCustomFieldChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceCustomFieldChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceCustomFieldChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceCustomFieldChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceCustomFieldChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceCustomFieldChangedMessage $data */
                $data = ProductPriceCustomFieldChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
