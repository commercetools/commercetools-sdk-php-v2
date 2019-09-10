<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;

interface ShoppingListSetTextLineItemCustomFieldAction extends ShoppingListUpdateAction
{
    
    const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';
    const FIELD_NAME = 'name';
    const FIELD_VALUE = 'value';

    /**
     *
     * @return string|null
     */
    public function getTextLineItemId();
    
    /**
     *
     * @return string|null
     */
    public function getName();
    
    /**
     *
     * @return JsonObject|null
     */
    public function getValue();
    public function setTextLineItemId(?string $textLineItemId): void;
    
    public function setName(?string $name): void;
    
    public function setValue(?JsonObject $value): void;
}