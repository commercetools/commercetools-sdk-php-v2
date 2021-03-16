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
 * @extends MapperSequence<SetShoppingListLineItemCustomTypeChange>
 * @method SetShoppingListLineItemCustomTypeChange current()
 * @method SetShoppingListLineItemCustomTypeChange at($offset)
 */
class SetShoppingListLineItemCustomTypeChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetShoppingListLineItemCustomTypeChange $value
     * @psalm-param SetShoppingListLineItemCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShoppingListLineItemCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShoppingListLineItemCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShoppingListLineItemCustomTypeChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetShoppingListLineItemCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetShoppingListLineItemCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
