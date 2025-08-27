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
 * @extends DiscountGroupUpdateActionCollection<DiscountGroupSetIsActiveAction>
 * @method DiscountGroupSetIsActiveAction current()
 * @method DiscountGroupSetIsActiveAction end()
 * @method DiscountGroupSetIsActiveAction at($offset)
 */
class DiscountGroupSetIsActiveActionCollection extends DiscountGroupUpdateActionCollection
{
    /**
     * @psalm-assert DiscountGroupSetIsActiveAction $value
     * @psalm-param DiscountGroupSetIsActiveAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupSetIsActiveActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupSetIsActiveAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupSetIsActiveAction
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupSetIsActiveAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupSetIsActiveAction $data */
                $data = DiscountGroupSetIsActiveActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
