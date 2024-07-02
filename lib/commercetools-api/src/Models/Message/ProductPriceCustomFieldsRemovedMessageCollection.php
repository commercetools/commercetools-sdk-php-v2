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
 * @extends MessageCollection<ProductPriceCustomFieldsRemovedMessage>
 * @method ProductPriceCustomFieldsRemovedMessage current()
 * @method ProductPriceCustomFieldsRemovedMessage end()
 * @method ProductPriceCustomFieldsRemovedMessage at($offset)
 */
class ProductPriceCustomFieldsRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductPriceCustomFieldsRemovedMessage $value
     * @psalm-param ProductPriceCustomFieldsRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceCustomFieldsRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceCustomFieldsRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceCustomFieldsRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceCustomFieldsRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceCustomFieldsRemovedMessage $data */
                $data = ProductPriceCustomFieldsRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
