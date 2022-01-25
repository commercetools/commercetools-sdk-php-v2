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
 * @extends MessageCollection<ProductSelectionProductAddedMessage>
 * @method ProductSelectionProductAddedMessage current()
 * @method ProductSelectionProductAddedMessage end()
 * @method ProductSelectionProductAddedMessage at($offset)
 */
class ProductSelectionProductAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductSelectionProductAddedMessage $value
     * @psalm-param ProductSelectionProductAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionProductAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionProductAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionProductAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionProductAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionProductAddedMessage $data */
                $data = ProductSelectionProductAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
