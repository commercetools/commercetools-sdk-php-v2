<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

interface ShoppingListSetTextLineItemCustomFieldAction extends ShoppingListUpdateAction {
    const FIELD_NAME = 'name';
    const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';
    const FIELD_VALUE = 'value';

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getTextLineItemId();

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param string $textLineItemId
     * @return $this
     */
    public function setTextLineItemId(string $textLineItemId);

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValue($value);

}
