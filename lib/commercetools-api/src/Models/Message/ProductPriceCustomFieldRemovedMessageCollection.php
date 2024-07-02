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
 * @extends MessageCollection<ProductPriceCustomFieldRemovedMessage>
 * @method ProductPriceCustomFieldRemovedMessage current()
 * @method ProductPriceCustomFieldRemovedMessage end()
 * @method ProductPriceCustomFieldRemovedMessage at($offset)
 */
class ProductPriceCustomFieldRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductPriceCustomFieldRemovedMessage $value
     * @psalm-param ProductPriceCustomFieldRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceCustomFieldRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceCustomFieldRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceCustomFieldRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceCustomFieldRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceCustomFieldRemovedMessage $data */
                $data = ProductPriceCustomFieldRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
