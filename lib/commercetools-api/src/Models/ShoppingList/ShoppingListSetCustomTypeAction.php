<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;

interface ShoppingListSetCustomTypeAction extends ShoppingListUpdateAction
{
    
    const FIELD_TYPE = 'type';
    const FIELD_FIELDS = 'fields';

    /**
     *
     * @return TypeResourceIdentifier|null
     */
    public function getType();
    
    /**
     *
     * @return FieldContainer|null
     */
    public function getFields();
    public function setType(?TypeResourceIdentifier $type): void;
    
    public function setFields(?FieldContainer $fields): void;
}