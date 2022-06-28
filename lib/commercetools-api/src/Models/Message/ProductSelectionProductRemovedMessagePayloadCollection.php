<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<ProductSelectionProductRemovedMessagePayload>
 * @method ProductSelectionProductRemovedMessagePayload current()
 * @method ProductSelectionProductRemovedMessagePayload end()
 * @method ProductSelectionProductRemovedMessagePayload at($offset)
 */
class ProductSelectionProductRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductSelectionProductRemovedMessagePayload $value
     * @psalm-param ProductSelectionProductRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionProductRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionProductRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionProductRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionProductRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionProductRemovedMessagePayload $data */
                $data = ProductSelectionProductRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
