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
 * @extends MyCartUpdateActionCollection<MyCartAddLineItemAction>
 * @method MyCartAddLineItemAction current()
 * @method MyCartAddLineItemAction end()
 * @method MyCartAddLineItemAction at($offset)
 */
class MyCartAddLineItemActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartAddLineItemAction $value
     * @psalm-param MyCartAddLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartAddLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartAddLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartAddLineItemAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartAddLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartAddLineItemAction $data */
                $data = MyCartAddLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
