<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Base\JsonCollection;
use Commercetools\Base\DiscriminatorResolver;


class ShoppingListUpdateActionCollectionModel extends JsonCollection implements ShoppingListUpdateActionCollection {

    /**
     * @param ShoppingListUpdateAction $value
     * @return ShoppingListUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListUpdateAction) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(ShoppingListUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
