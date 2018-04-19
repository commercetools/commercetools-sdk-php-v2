<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\Common\LocalizedString;

interface ShoppingListSetTextLineItemDescriptionAction extends ShoppingListUpdateAction
{
    const FIELD_DESCRIPTION = 'description';
    const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getTextLineItemId();

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

    /**
     * @param string $textLineItemId
     * @return $this
     */
    public function setTextLineItemId(string $textLineItemId);

}
