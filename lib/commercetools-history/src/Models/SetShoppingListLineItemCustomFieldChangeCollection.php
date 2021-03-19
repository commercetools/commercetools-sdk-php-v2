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
 * @extends MapperSequence<SetShoppingListLineItemCustomFieldChange>
 * @method SetShoppingListLineItemCustomFieldChange current()
 * @method SetShoppingListLineItemCustomFieldChange at($offset)
 */
class SetShoppingListLineItemCustomFieldChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetShoppingListLineItemCustomFieldChange $value
     * @psalm-param SetShoppingListLineItemCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShoppingListLineItemCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShoppingListLineItemCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShoppingListLineItemCustomFieldChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetShoppingListLineItemCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetShoppingListLineItemCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
