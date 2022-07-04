<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DirectDiscount>
 * @method DirectDiscount current()
 * @method DirectDiscount end()
 * @method DirectDiscount at($offset)
 */
class DirectDiscountCollection extends MapperSequence
{
    /**
     * @psalm-assert DirectDiscount $value
     * @psalm-param DirectDiscount|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DirectDiscountCollection
     */
    public function add($value)
    {
        if (!$value instanceof DirectDiscount) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DirectDiscount
     */
    protected function mapper()
    {
        return function (?int $index): ?DirectDiscount {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DirectDiscount $data */
                $data = DirectDiscountModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
