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
 * @extends MapperSequence<SetLineItemDiscountedPriceChange>
 * @method SetLineItemDiscountedPriceChange current()
 * @method SetLineItemDiscountedPriceChange at($offset)
 */
class SetLineItemDiscountedPriceChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLineItemDiscountedPriceChange $value
     * @psalm-param SetLineItemDiscountedPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemDiscountedPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemDiscountedPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemDiscountedPriceChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetLineItemDiscountedPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLineItemDiscountedPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
