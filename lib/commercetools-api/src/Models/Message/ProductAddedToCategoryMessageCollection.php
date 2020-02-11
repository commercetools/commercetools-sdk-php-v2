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
 * @extends MapperSequence<ProductAddedToCategoryMessage>
 * @method ProductAddedToCategoryMessage current()
 * @method ProductAddedToCategoryMessage at($offset)
 */
class ProductAddedToCategoryMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductAddedToCategoryMessage $value
     * @psalm-param ProductAddedToCategoryMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductAddedToCategoryMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductAddedToCategoryMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductAddedToCategoryMessage
     */
    protected function mapper()
    {
        return function (int $index): ?ProductAddedToCategoryMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductAddedToCategoryMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
