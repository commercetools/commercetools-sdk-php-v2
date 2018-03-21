<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\Common\LocalizedString;

interface ShoppingListChangeTextLineItemNameAction extends ShoppingListUpdateAction {
    const FIELD_NAME = 'name';
    const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return string
     */
    public function getTextLineItemId();

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

    /**
     * @param string $textLineItemId
     * @return $this
     */
    public function setTextLineItemId(string $textLineItemId);

}
