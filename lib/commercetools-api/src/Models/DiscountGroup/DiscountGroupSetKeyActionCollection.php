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
 * @extends DiscountGroupUpdateActionCollection<DiscountGroupSetKeyAction>
 * @method DiscountGroupSetKeyAction current()
 * @method DiscountGroupSetKeyAction end()
 * @method DiscountGroupSetKeyAction at($offset)
 */
class DiscountGroupSetKeyActionCollection extends DiscountGroupUpdateActionCollection
{
    /**
     * @psalm-assert DiscountGroupSetKeyAction $value
     * @psalm-param DiscountGroupSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupSetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupSetKeyAction $data */
                $data = DiscountGroupSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
