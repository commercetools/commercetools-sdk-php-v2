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
 * @extends DiscountCodeUpdateActionCollection<DiscountCodeSetValidFromAndUntilAction>
 * @method DiscountCodeSetValidFromAndUntilAction current()
 * @method DiscountCodeSetValidFromAndUntilAction at($offset)
 */
class DiscountCodeSetValidFromAndUntilActionCollection extends DiscountCodeUpdateActionCollection
{
    /**
     * @psalm-assert DiscountCodeSetValidFromAndUntilAction $value
     * @psalm-param DiscountCodeSetValidFromAndUntilAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeSetValidFromAndUntilActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeSetValidFromAndUntilAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeSetValidFromAndUntilAction
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountCodeSetValidFromAndUntilAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeSetValidFromAndUntilAction $data */
                $data = DiscountCodeSetValidFromAndUntilActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
