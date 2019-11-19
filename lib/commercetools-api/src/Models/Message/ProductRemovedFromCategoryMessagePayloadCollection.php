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
 * @extends MapperSequence<ProductRemovedFromCategoryMessagePayload>
 *
 * @method ProductRemovedFromCategoryMessagePayload current()
 * @method ProductRemovedFromCategoryMessagePayload at($offset)
 */
class ProductRemovedFromCategoryMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductRemovedFromCategoryMessagePayload $value
     * @psalm-param ProductRemovedFromCategoryMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductRemovedFromCategoryMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductRemovedFromCategoryMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRemovedFromCategoryMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?ProductRemovedFromCategoryMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductRemovedFromCategoryMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
