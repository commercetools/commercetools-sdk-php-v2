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
 * @extends MapperSequence<DiscountedLineItemPortion>
 * @method DiscountedLineItemPortion current()
 * @method DiscountedLineItemPortion at($offset)
 */
class DiscountedLineItemPortionCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountedLineItemPortion $value
     * @psalm-param DiscountedLineItemPortion|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountedLineItemPortionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountedLineItemPortion) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountedLineItemPortion
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountedLineItemPortion {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DiscountedLineItemPortionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
