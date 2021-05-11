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
 * @extends MessagePayloadCollection<ProductCreatedMessagePayload>
 * @method ProductCreatedMessagePayload current()
 * @method ProductCreatedMessagePayload at($offset)
 */
class ProductCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductCreatedMessagePayload $value
     * @psalm-param ProductCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?ProductCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductCreatedMessagePayload $data */
                $data = ProductCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
