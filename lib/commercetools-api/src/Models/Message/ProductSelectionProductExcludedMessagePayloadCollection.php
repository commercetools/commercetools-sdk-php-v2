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
 * @extends MessagePayloadCollection<ProductSelectionProductExcludedMessagePayload>
 * @method ProductSelectionProductExcludedMessagePayload current()
 * @method ProductSelectionProductExcludedMessagePayload end()
 * @method ProductSelectionProductExcludedMessagePayload at($offset)
 */
class ProductSelectionProductExcludedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductSelectionProductExcludedMessagePayload $value
     * @psalm-param ProductSelectionProductExcludedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionProductExcludedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionProductExcludedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionProductExcludedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionProductExcludedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionProductExcludedMessagePayload $data */
                $data = ProductSelectionProductExcludedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
