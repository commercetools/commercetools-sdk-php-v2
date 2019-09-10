<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;

interface StagedOrderSetLineItemCustomTypeAction extends StagedOrderUpdateAction
{
    
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_TYPE = 'type';
    const FIELD_FIELDS = 'fields';

    /**
     *
     * @return string|null
     */
    public function getLineItemId();
    
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
    public function setLineItemId(?string $lineItemId): void;
    
    public function setType(?TypeResourceIdentifier $type): void;
    
    public function setFields(?FieldContainer $fields): void;
}