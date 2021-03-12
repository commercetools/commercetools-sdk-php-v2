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
 * @extends MapperSequence<AddTextLineItemAction>
 * @method AddTextLineItemAction current()
 * @method AddTextLineItemAction at($offset)
 */
class AddTextLineItemActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddTextLineItemAction $value
     * @psalm-param AddTextLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddTextLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddTextLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddTextLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddTextLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddTextLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
