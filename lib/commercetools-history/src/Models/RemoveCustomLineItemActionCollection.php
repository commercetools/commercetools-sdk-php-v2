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
 * @extends MapperSequence<RemoveCustomLineItemAction>
 * @method RemoveCustomLineItemAction current()
 * @method RemoveCustomLineItemAction at($offset)
 */
class RemoveCustomLineItemActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveCustomLineItemAction $value
     * @psalm-param RemoveCustomLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveCustomLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveCustomLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveCustomLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveCustomLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveCustomLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
