<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface CartSetCustomLineItemCustomFieldAction extends CartUpdateAction
{
    
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_NAME = 'name';
    const FIELD_VALUE = 'value';

    /**
     *
     * @return string|null
     */
    public function getCustomLineItemId();
    
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
    public function setCustomLineItemId(?string $customLineItemId): void;
    
    public function setName(?string $name): void;
    
    public function setValue(?JsonObject $value): void;
}