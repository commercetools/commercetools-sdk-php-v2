<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyCartUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyCartUpdateActionCollection<MyCartRemoveDiscountCodeAction>
 * @method MyCartRemoveDiscountCodeAction current()
 * @method MyCartRemoveDiscountCodeAction at($offset)
 */
class MyCartRemoveDiscountCodeActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartRemoveDiscountCodeAction $value
     * @psalm-param MyCartRemoveDiscountCodeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartRemoveDiscountCodeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartRemoveDiscountCodeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartRemoveDiscountCodeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartRemoveDiscountCodeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartRemoveDiscountCodeAction $data */
                $data = MyCartRemoveDiscountCodeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
