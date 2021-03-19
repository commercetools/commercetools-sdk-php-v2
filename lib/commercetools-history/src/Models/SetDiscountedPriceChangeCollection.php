<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetDiscountedPriceChange>
 * @method SetDiscountedPriceChange current()
 * @method SetDiscountedPriceChange at($offset)
 */
class SetDiscountedPriceChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetDiscountedPriceChange $value
     * @psalm-param SetDiscountedPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDiscountedPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDiscountedPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDiscountedPriceChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetDiscountedPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetDiscountedPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
