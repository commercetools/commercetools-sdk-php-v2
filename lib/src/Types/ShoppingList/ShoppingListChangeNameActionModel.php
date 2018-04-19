<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ShoppingList\ShoppingListUpdateActionModel;

use Commercetools\Types\Common\LocalizedString;

class ShoppingListChangeNameActionModel extends ShoppingListUpdateActionModel implements ShoppingListChangeNameAction
{
    const DISCRIMINATOR_VALUE = 'changeName';

    /**
     * @var LocalizedString
     */
    protected $name;

    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(ShoppingListChangeNameAction::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

}
