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
 * @extends DiscountCodeUpdateActionCollection<DiscountCodeSetKeyAction>
 * @method DiscountCodeSetKeyAction current()
 * @method DiscountCodeSetKeyAction end()
 * @method DiscountCodeSetKeyAction at($offset)
 */
class DiscountCodeSetKeyActionCollection extends DiscountCodeUpdateActionCollection
{
    /**
     * @psalm-assert DiscountCodeSetKeyAction $value
     * @psalm-param DiscountCodeSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeSetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountCodeSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeSetKeyAction $data */
                $data = DiscountCodeSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
