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
 * @extends MessageCollection<ProductSelectionVariantExclusionChangedMessage>
 * @method ProductSelectionVariantExclusionChangedMessage current()
 * @method ProductSelectionVariantExclusionChangedMessage end()
 * @method ProductSelectionVariantExclusionChangedMessage at($offset)
 */
class ProductSelectionVariantExclusionChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductSelectionVariantExclusionChangedMessage $value
     * @psalm-param ProductSelectionVariantExclusionChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionVariantExclusionChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionVariantExclusionChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionVariantExclusionChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionVariantExclusionChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionVariantExclusionChangedMessage $data */
                $data = ProductSelectionVariantExclusionChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
