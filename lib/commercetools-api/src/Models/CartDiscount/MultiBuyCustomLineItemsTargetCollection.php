<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\CartDiscount\CartDiscountTargetCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CartDiscountTargetCollection<MultiBuyCustomLineItemsTarget>
 * @method MultiBuyCustomLineItemsTarget current()
 * @method MultiBuyCustomLineItemsTarget at($offset)
 */
class MultiBuyCustomLineItemsTargetCollection extends CartDiscountTargetCollection
{
    /**
     * @psalm-assert MultiBuyCustomLineItemsTarget $value
     * @psalm-param MultiBuyCustomLineItemsTarget|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MultiBuyCustomLineItemsTargetCollection
     */
    public function add($value)
    {
        if (!$value instanceof MultiBuyCustomLineItemsTarget) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MultiBuyCustomLineItemsTarget
     */
    protected function mapper()
    {
        return function (?int $index): ?MultiBuyCustomLineItemsTarget {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MultiBuyCustomLineItemsTarget $data */
                $data = MultiBuyCustomLineItemsTargetModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
