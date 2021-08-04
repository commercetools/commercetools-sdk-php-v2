<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderExcerpt>
 * @method OrderExcerpt current()
 * @method OrderExcerpt end()
 * @method OrderExcerpt at($offset)
 */
class OrderExcerptCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderExcerpt $value
     * @psalm-param OrderExcerpt|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderExcerptCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderExcerpt) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderExcerpt
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderExcerpt {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderExcerpt $data */
                $data = OrderExcerptModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
