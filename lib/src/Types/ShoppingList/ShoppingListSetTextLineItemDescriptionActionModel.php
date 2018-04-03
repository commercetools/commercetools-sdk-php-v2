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

class ShoppingListSetTextLineItemDescriptionActionModel extends ShoppingListUpdateActionModel implements ShoppingListSetTextLineItemDescriptionAction {
    const DISCRIMINATOR_VALUE = 'setTextLineItemDescription';

    /**
     * @var LocalizedString
     */
    protected $description;
    /**
     * @var string
     */
    protected $textLineItemId;

    /**
     * @return LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(ShoppingListSetTextLineItemDescriptionAction::FIELD_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return string
     */
    public function getTextLineItemId()
    {
        if (is_null($this->textLineItemId)) {
            $value = $this->raw(ShoppingListSetTextLineItemDescriptionAction::FIELD_TEXT_LINE_ITEM_ID);
            $value = (string)$value;
            $this->textLineItemId = $value;
        }
        return $this->textLineItemId;
    }

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description)
    {
        $this->description = $description;

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
