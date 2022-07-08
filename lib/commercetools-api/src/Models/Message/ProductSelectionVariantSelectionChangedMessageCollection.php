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
 * @extends MessageCollection<ProductSelectionVariantSelectionChangedMessage>
 * @method ProductSelectionVariantSelectionChangedMessage current()
 * @method ProductSelectionVariantSelectionChangedMessage end()
 * @method ProductSelectionVariantSelectionChangedMessage at($offset)
 */
class ProductSelectionVariantSelectionChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductSelectionVariantSelectionChangedMessage $value
     * @psalm-param ProductSelectionVariantSelectionChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionVariantSelectionChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionVariantSelectionChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionVariantSelectionChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionVariantSelectionChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionVariantSelectionChangedMessage $data */
                $data = ProductSelectionVariantSelectionChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
