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
 * @extends MessageCollection<ProductPriceCustomFieldAddedMessage>
 * @method ProductPriceCustomFieldAddedMessage current()
 * @method ProductPriceCustomFieldAddedMessage end()
 * @method ProductPriceCustomFieldAddedMessage at($offset)
 */
class ProductPriceCustomFieldAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductPriceCustomFieldAddedMessage $value
     * @psalm-param ProductPriceCustomFieldAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceCustomFieldAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceCustomFieldAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceCustomFieldAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceCustomFieldAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceCustomFieldAddedMessage $data */
                $data = ProductPriceCustomFieldAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
