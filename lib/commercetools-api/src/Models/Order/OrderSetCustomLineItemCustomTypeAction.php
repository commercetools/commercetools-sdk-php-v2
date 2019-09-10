<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;

interface OrderSetCustomLineItemCustomTypeAction extends OrderUpdateAction
{
    
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_TYPE = 'type';
    const FIELD_FIELDS = 'fields';

    /**
     *
     * @return string|null
     */
    public function getCustomLineItemId();
    
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
    public function setCustomLineItemId(?string $customLineItemId): void;
    
    public function setType(?TypeResourceIdentifier $type): void;
    
    public function setFields(?FieldContainer $fields): void;
}