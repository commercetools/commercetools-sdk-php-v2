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
 * @extends MapperSequence<ProductRemovedFromCategoryMessage>
 *
 * @method ProductRemovedFromCategoryMessage current()
 * @method ProductRemovedFromCategoryMessage at($offset)
 */
class ProductRemovedFromCategoryMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductRemovedFromCategoryMessage $value
     * @psalm-param ProductRemovedFromCategoryMessage|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductRemovedFromCategoryMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductRemovedFromCategoryMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRemovedFromCategoryMessage
     */
    protected function mapper()
    {
        return function (int $index): ?ProductRemovedFromCategoryMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductRemovedFromCategoryMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
