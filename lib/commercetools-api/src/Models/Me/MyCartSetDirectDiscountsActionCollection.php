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
 * @extends MyCartUpdateActionCollection<MyCartSetDirectDiscountsAction>
 * @method MyCartSetDirectDiscountsAction current()
 * @method MyCartSetDirectDiscountsAction end()
 * @method MyCartSetDirectDiscountsAction at($offset)
 */
class MyCartSetDirectDiscountsActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartSetDirectDiscountsAction $value
     * @psalm-param MyCartSetDirectDiscountsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetDirectDiscountsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetDirectDiscountsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetDirectDiscountsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartSetDirectDiscountsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartSetDirectDiscountsAction $data */
                $data = MyCartSetDirectDiscountsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
