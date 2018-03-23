<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\Type\TypeReference;

interface ShoppingListSetTextLineItemCustomTypeAction extends ShoppingListUpdateAction {
    const FIELD_FIELDS = 'fields';
    const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';
    const FIELD_TYPE = 'type';

    /**
     * @return string
     */
    public function getFields();

    /**
     * @return string
     */
    public function getTextLineItemId();

    /**
     * @return TypeReference
     */
    public function getType();

    /**
     * @param string $fields
     * @return $this
     */
    public function setFields(string $fields);

    /**
     * @param string $textLineItemId
     * @return $this
     */
    public function setTextLineItemId(string $textLineItemId);

    /**
     * @param TypeReference $type
     * @return $this
     */
    public function setType(TypeReference $type);

}
