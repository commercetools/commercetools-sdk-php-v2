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
 * @extends MapperSequence<ProductDeletedMessagePayload>
 *
 * @method ProductDeletedMessagePayload current()
 * @method ProductDeletedMessagePayload at($offset)
 */
class ProductDeletedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDeletedMessagePayload $value
     * @psalm-param ProductDeletedMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
