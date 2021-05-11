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
 * @extends DiscountCodeUpdateActionCollection<DiscountCodeSetValidUntilAction>
 * @method DiscountCodeSetValidUntilAction current()
 * @method DiscountCodeSetValidUntilAction at($offset)
 */
class DiscountCodeSetValidUntilActionCollection extends DiscountCodeUpdateActionCollection
{
    /**
     * @psalm-assert DiscountCodeSetValidUntilAction $value
     * @psalm-param DiscountCodeSetValidUntilAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeSetValidUntilActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeSetValidUntilAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeSetValidUntilAction
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountCodeSetValidUntilAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeSetValidUntilAction $data */
                $data = DiscountCodeSetValidUntilActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
