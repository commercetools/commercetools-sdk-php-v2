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
 * @extends MessagePayloadCollection<ProductTailoringCreatedMessagePayload>
 * @method ProductTailoringCreatedMessagePayload current()
 * @method ProductTailoringCreatedMessagePayload end()
 * @method ProductTailoringCreatedMessagePayload at($offset)
 */
class ProductTailoringCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductTailoringCreatedMessagePayload $value
     * @psalm-param ProductTailoringCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringCreatedMessagePayload $data */
                $data = ProductTailoringCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
