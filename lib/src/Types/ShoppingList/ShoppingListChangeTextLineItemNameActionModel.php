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

class ShoppingListChangeTextLineItemNameActionModel extends ShoppingListUpdateActionModel implements ShoppingListChangeTextLineItemNameAction
{
    const DISCRIMINATOR_VALUE = 'changeTextLineItemName';

    /**
     * @var LocalizedString
     */
    protected $name;
    /**
     * @var string
     */
    protected $textLineItemId;

    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(ShoppingListChangeTextLineItemNameAction::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return string
     */
    public function getTextLineItemId()
    {
        if (is_null($this->textLineItemId)) {
            $value = $this->raw(ShoppingListChangeTextLineItemNameAction::FIELD_TEXT_LINE_ITEM_ID);
            $value = (string)$value;
            $this->textLineItemId = $value;
        }
        return $this->textLineItemId;
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
    /**
     * @param string $textLineItemId
     * @return $this
     */
    public function setTextLineItemId(string $textLineItemId)
    {
        $this->textLineItemId = (string)$textLineItemId;

        return $this;
    }

}
