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
 * @extends MapperSequence<RemoveTextLineItemAction>
 * @method RemoveTextLineItemAction current()
 * @method RemoveTextLineItemAction at($offset)
 */
class RemoveTextLineItemActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveTextLineItemAction $value
     * @psalm-param RemoveTextLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveTextLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveTextLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveTextLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveTextLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveTextLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
