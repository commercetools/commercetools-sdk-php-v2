<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ScopedPrice>
 *
 * @method ScopedPrice current()
 * @method ScopedPrice at($offset)
 */
class ScopedPriceCollection extends MapperSequence
{
    /**
     * @psalm-assert ScopedPrice $value
     * @psalm-param ScopedPrice|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ScopedPriceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ScopedPrice) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ScopedPrice
     */
    protected function mapper()
    {
        return function (int $index): ?ScopedPrice {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ScopedPriceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
