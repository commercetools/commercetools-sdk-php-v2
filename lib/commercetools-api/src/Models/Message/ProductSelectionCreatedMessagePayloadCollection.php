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
 * @extends MessagePayloadCollection<ProductSelectionCreatedMessagePayload>
 * @method ProductSelectionCreatedMessagePayload current()
 * @method ProductSelectionCreatedMessagePayload end()
 * @method ProductSelectionCreatedMessagePayload at($offset)
 */
class ProductSelectionCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductSelectionCreatedMessagePayload $value
     * @psalm-param ProductSelectionCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionCreatedMessagePayload $data */
                $data = ProductSelectionCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
