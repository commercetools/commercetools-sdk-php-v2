<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductImageAddedMessagePayload>
 *
 * @method ProductImageAddedMessagePayload current()
 * @method ProductImageAddedMessagePayload at($offset)
 */
class ProductImageAddedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductImageAddedMessagePayload $value
     * @psalm-param ProductImageAddedMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductImageAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductImageAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductImageAddedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?ProductImageAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductImageAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
