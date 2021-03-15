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
 * @extends MapperSequence<AddCustomLineItemAction>
 * @method AddCustomLineItemAction current()
 * @method AddCustomLineItemAction at($offset)
 */
class AddCustomLineItemActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddCustomLineItemAction $value
     * @psalm-param AddCustomLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddCustomLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddCustomLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddCustomLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddCustomLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddCustomLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
