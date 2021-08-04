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
 * @extends MyCartUpdateActionCollection<MyCartRemoveLineItemAction>
 * @method MyCartRemoveLineItemAction current()
 * @method MyCartRemoveLineItemAction end()
 * @method MyCartRemoveLineItemAction at($offset)
 */
class MyCartRemoveLineItemActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartRemoveLineItemAction $value
     * @psalm-param MyCartRemoveLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartRemoveLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartRemoveLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartRemoveLineItemAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartRemoveLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartRemoveLineItemAction $data */
                $data = MyCartRemoveLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
