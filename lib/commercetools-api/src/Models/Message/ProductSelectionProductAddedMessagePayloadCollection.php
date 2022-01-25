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
 * @extends MessagePayloadCollection<ProductSelectionProductAddedMessagePayload>
 * @method ProductSelectionProductAddedMessagePayload current()
 * @method ProductSelectionProductAddedMessagePayload end()
 * @method ProductSelectionProductAddedMessagePayload at($offset)
 */
class ProductSelectionProductAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductSelectionProductAddedMessagePayload $value
     * @psalm-param ProductSelectionProductAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionProductAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionProductAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionProductAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionProductAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionProductAddedMessagePayload $data */
                $data = ProductSelectionProductAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
