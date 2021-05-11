<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<ShoppingListResourceIdentifier>
 * @method ShoppingListResourceIdentifier current()
 * @method ShoppingListResourceIdentifier at($offset)
 */
class ShoppingListResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert ShoppingListResourceIdentifier $value
     * @psalm-param ShoppingListResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListResourceIdentifier $data */
                $data = ShoppingListResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
