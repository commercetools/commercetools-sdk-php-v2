<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountCode>
 *
 * @method DiscountCode current()
 * @method DiscountCode at($offset)
 */
class DiscountCodeCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCode $value
     * @psalm-param DiscountCode|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCode) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCode
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountCode {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DiscountCodeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
