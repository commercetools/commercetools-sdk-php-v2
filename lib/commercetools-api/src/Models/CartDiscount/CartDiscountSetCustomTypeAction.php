<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;

interface CartDiscountSetCustomTypeAction extends CartDiscountUpdateAction
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
     * @return JsonObject|null
     */
    public function getFields();
    public function setType(?TypeResourceIdentifier $type): void;
    
    public function setFields(?JsonObject $fields): void;
}