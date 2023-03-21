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
 * @extends MessageCollection<ProductSelectionProductExcludedMessage>
 * @method ProductSelectionProductExcludedMessage current()
 * @method ProductSelectionProductExcludedMessage end()
 * @method ProductSelectionProductExcludedMessage at($offset)
 */
class ProductSelectionProductExcludedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductSelectionProductExcludedMessage $value
     * @psalm-param ProductSelectionProductExcludedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionProductExcludedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionProductExcludedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionProductExcludedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionProductExcludedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionProductExcludedMessage $data */
                $data = ProductSelectionProductExcludedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
