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
 * @extends MyCartUpdateActionCollection<MyCartAddDiscountCodeAction>
 * @method MyCartAddDiscountCodeAction current()
 * @method MyCartAddDiscountCodeAction at($offset)
 */
class MyCartAddDiscountCodeActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartAddDiscountCodeAction $value
     * @psalm-param MyCartAddDiscountCodeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartAddDiscountCodeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartAddDiscountCodeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartAddDiscountCodeAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartAddDiscountCodeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartAddDiscountCodeAction $data */
                $data = MyCartAddDiscountCodeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
