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
 * @extends MapperSequence<RemoveOrderLineItemAction>
 * @method RemoveOrderLineItemAction current()
 * @method RemoveOrderLineItemAction at($offset)
 */
class RemoveOrderLineItemActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveOrderLineItemAction $value
     * @psalm-param RemoveOrderLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveOrderLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveOrderLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveOrderLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveOrderLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveOrderLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
