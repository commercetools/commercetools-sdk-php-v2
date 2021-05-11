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
 * @extends DiscountCodeUpdateActionCollection<DiscountCodeChangeGroupsAction>
 * @method DiscountCodeChangeGroupsAction current()
 * @method DiscountCodeChangeGroupsAction at($offset)
 */
class DiscountCodeChangeGroupsActionCollection extends DiscountCodeUpdateActionCollection
{
    /**
     * @psalm-assert DiscountCodeChangeGroupsAction $value
     * @psalm-param DiscountCodeChangeGroupsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeChangeGroupsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeChangeGroupsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeChangeGroupsAction
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountCodeChangeGroupsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeChangeGroupsAction $data */
                $data = DiscountCodeChangeGroupsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
