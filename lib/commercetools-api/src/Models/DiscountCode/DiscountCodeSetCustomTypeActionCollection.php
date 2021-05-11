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
 * @extends DiscountCodeUpdateActionCollection<DiscountCodeSetCustomTypeAction>
 * @method DiscountCodeSetCustomTypeAction current()
 * @method DiscountCodeSetCustomTypeAction at($offset)
 */
class DiscountCodeSetCustomTypeActionCollection extends DiscountCodeUpdateActionCollection
{
    /**
     * @psalm-assert DiscountCodeSetCustomTypeAction $value
     * @psalm-param DiscountCodeSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountCodeSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeSetCustomTypeAction $data */
                $data = DiscountCodeSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
