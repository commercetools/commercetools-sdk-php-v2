<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<ShoppingListReference>
 * @method ShoppingListReference current()
 * @method ShoppingListReference at($offset)
 */
class ShoppingListReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert ShoppingListReference $value
     * @psalm-param ShoppingListReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListReference
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListReference $data */
                $data = ShoppingListReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
