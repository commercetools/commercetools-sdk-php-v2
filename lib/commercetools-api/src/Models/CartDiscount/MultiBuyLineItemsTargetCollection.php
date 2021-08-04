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
 * @extends CartDiscountTargetCollection<MultiBuyLineItemsTarget>
 * @method MultiBuyLineItemsTarget current()
 * @method MultiBuyLineItemsTarget end()
 * @method MultiBuyLineItemsTarget at($offset)
 */
class MultiBuyLineItemsTargetCollection extends CartDiscountTargetCollection
{
    /**
     * @psalm-assert MultiBuyLineItemsTarget $value
     * @psalm-param MultiBuyLineItemsTarget|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MultiBuyLineItemsTargetCollection
     */
    public function add($value)
    {
        if (!$value instanceof MultiBuyLineItemsTarget) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MultiBuyLineItemsTarget
     */
    protected function mapper()
    {
        return function (?int $index): ?MultiBuyLineItemsTarget {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MultiBuyLineItemsTarget $data */
                $data = MultiBuyLineItemsTargetModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
