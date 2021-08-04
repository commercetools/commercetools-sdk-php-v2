<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\DiscountCode\DiscountCodeUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends DiscountCodeUpdateActionCollection<DiscountCodeSetCartPredicateAction>
 * @method DiscountCodeSetCartPredicateAction current()
 * @method DiscountCodeSetCartPredicateAction at($offset)
 */
class DiscountCodeSetCartPredicateActionCollection extends DiscountCodeUpdateActionCollection
{
    /**
     * @psalm-assert DiscountCodeSetCartPredicateAction $value
     * @psalm-param DiscountCodeSetCartPredicateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeSetCartPredicateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeSetCartPredicateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeSetCartPredicateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountCodeSetCartPredicateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeSetCartPredicateAction $data */
                $data = DiscountCodeSetCartPredicateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
