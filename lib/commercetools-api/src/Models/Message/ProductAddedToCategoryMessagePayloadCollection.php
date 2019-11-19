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
 * @extends MapperSequence<ProductAddedToCategoryMessagePayload>
 *
 * @method ProductAddedToCategoryMessagePayload current()
 * @method ProductAddedToCategoryMessagePayload at($offset)
 */
class ProductAddedToCategoryMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductAddedToCategoryMessagePayload $value
     * @psalm-param ProductAddedToCategoryMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductAddedToCategoryMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductAddedToCategoryMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductAddedToCategoryMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?ProductAddedToCategoryMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductAddedToCategoryMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
