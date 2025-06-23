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
 * @extends DiscountGroupUpdateActionCollection<DiscountGroupSetNameAction>
 * @method DiscountGroupSetNameAction current()
 * @method DiscountGroupSetNameAction end()
 * @method DiscountGroupSetNameAction at($offset)
 */
class DiscountGroupSetNameActionCollection extends DiscountGroupUpdateActionCollection
{
    /**
     * @psalm-assert DiscountGroupSetNameAction $value
     * @psalm-param DiscountGroupSetNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupSetNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupSetNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupSetNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupSetNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupSetNameAction $data */
                $data = DiscountGroupSetNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
