<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AddOrderLineItemAction>
 * @method AddOrderLineItemAction current()
 * @method AddOrderLineItemAction at($offset)
 */
class AddOrderLineItemActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddOrderLineItemAction $value
     * @psalm-param AddOrderLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddOrderLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddOrderLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddOrderLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddOrderLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddOrderLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
