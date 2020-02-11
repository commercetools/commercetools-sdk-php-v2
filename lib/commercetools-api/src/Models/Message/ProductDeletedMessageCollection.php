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
 * @extends MapperSequence<ProductDeletedMessage>
 * @method ProductDeletedMessage current()
 * @method ProductDeletedMessage at($offset)
 */
class ProductDeletedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDeletedMessage $value
     * @psalm-param ProductDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDeletedMessage
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
