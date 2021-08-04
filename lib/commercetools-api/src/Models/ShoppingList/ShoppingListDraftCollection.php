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
 * @extends MapperSequence<ShoppingListDraft>
 * @method ShoppingListDraft current()
 * @method ShoppingListDraft at($offset)
 */
class ShoppingListDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListDraft $value
     * @psalm-param ShoppingListDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListDraft $data */
                $data = ShoppingListDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
