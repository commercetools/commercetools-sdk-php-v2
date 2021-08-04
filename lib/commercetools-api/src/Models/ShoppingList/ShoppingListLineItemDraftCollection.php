<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShoppingListLineItemDraft>
 * @method ShoppingListLineItemDraft current()
 * @method ShoppingListLineItemDraft end()
 * @method ShoppingListLineItemDraft at($offset)
 */
class ShoppingListLineItemDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListLineItemDraft $value
     * @psalm-param ShoppingListLineItemDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListLineItemDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListLineItemDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListLineItemDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListLineItemDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListLineItemDraft $data */
                $data = ShoppingListLineItemDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
