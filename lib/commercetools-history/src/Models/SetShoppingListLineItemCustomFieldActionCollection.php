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
 * @extends MapperSequence<SetShoppingListLineItemCustomFieldAction>
 * @method SetShoppingListLineItemCustomFieldAction current()
 * @method SetShoppingListLineItemCustomFieldAction at($offset)
 */
class SetShoppingListLineItemCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetShoppingListLineItemCustomFieldAction $value
     * @psalm-param SetShoppingListLineItemCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShoppingListLineItemCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShoppingListLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShoppingListLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetShoppingListLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetShoppingListLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
