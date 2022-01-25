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
 * @extends MessageCollection<ProductSelectionProductRemovedMessage>
 * @method ProductSelectionProductRemovedMessage current()
 * @method ProductSelectionProductRemovedMessage end()
 * @method ProductSelectionProductRemovedMessage at($offset)
 */
class ProductSelectionProductRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductSelectionProductRemovedMessage $value
     * @psalm-param ProductSelectionProductRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionProductRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionProductRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionProductRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionProductRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionProductRemovedMessage $data */
                $data = ProductSelectionProductRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
