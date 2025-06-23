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
 * @extends DiscountGroupUpdateActionCollection<DiscountGroupSetDescriptionAction>
 * @method DiscountGroupSetDescriptionAction current()
 * @method DiscountGroupSetDescriptionAction end()
 * @method DiscountGroupSetDescriptionAction at($offset)
 */
class DiscountGroupSetDescriptionActionCollection extends DiscountGroupUpdateActionCollection
{
    /**
     * @psalm-assert DiscountGroupSetDescriptionAction $value
     * @psalm-param DiscountGroupSetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupSetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupSetDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupSetDescriptionAction $data */
                $data = DiscountGroupSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
