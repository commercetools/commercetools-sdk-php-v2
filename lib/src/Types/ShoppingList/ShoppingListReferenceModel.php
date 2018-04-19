<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class ShoppingListReferenceModel extends ReferenceModel implements ShoppingListReference
{
    const DISCRIMINATOR_VALUE = 'shopping-list';

    /**
     * @var ShoppingList
     */
    protected $obj;

    /**
     * @return ShoppingList
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(ShoppingListReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(ShoppingList::class, null);
            }
            $value = $this->mapData(ShoppingList::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param ShoppingList $obj
     * @return $this
     */
    public function setObj(ShoppingList $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
