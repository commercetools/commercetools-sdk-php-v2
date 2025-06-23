<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountGroup;

use Commercetools\Api\Models\DiscountGroup\DiscountGroupUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends DiscountGroupUpdateActionCollection<DiscountGroupSetSortOrderAction>
 * @method DiscountGroupSetSortOrderAction current()
 * @method DiscountGroupSetSortOrderAction end()
 * @method DiscountGroupSetSortOrderAction at($offset)
 */
class DiscountGroupSetSortOrderActionCollection extends DiscountGroupUpdateActionCollection
{
    /**
     * @psalm-assert DiscountGroupSetSortOrderAction $value
     * @psalm-param DiscountGroupSetSortOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupSetSortOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupSetSortOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupSetSortOrderAction
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupSetSortOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupSetSortOrderAction $data */
                $data = DiscountGroupSetSortOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
