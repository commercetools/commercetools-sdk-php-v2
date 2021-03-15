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
 * @extends MapperSequence<SetShoppingListLineItemCustomTypeAction>
 * @method SetShoppingListLineItemCustomTypeAction current()
 * @method SetShoppingListLineItemCustomTypeAction at($offset)
 */
class SetShoppingListLineItemCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetShoppingListLineItemCustomTypeAction $value
     * @psalm-param SetShoppingListLineItemCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShoppingListLineItemCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShoppingListLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShoppingListLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetShoppingListLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetShoppingListLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
