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
 * @extends MessageCollection<ProductSelectionCreatedMessage>
 * @method ProductSelectionCreatedMessage current()
 * @method ProductSelectionCreatedMessage end()
 * @method ProductSelectionCreatedMessage at($offset)
 */
class ProductSelectionCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductSelectionCreatedMessage $value
     * @psalm-param ProductSelectionCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionCreatedMessage $data */
                $data = ProductSelectionCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
