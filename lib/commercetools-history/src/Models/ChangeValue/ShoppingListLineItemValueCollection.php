<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShoppingListLineItemValue>
 * @method ShoppingListLineItemValue current()
 * @method ShoppingListLineItemValue at($offset)
 */
class ShoppingListLineItemValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListLineItemValue $value
     * @psalm-param ShoppingListLineItemValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListLineItemValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListLineItemValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListLineItemValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListLineItemValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListLineItemValue $data */
                $data = ShoppingListLineItemValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
