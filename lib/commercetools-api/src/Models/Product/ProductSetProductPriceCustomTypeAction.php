<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;

interface ProductSetProductPriceCustomTypeAction extends ProductUpdateAction
{
    
    const FIELD_PRICE_ID = 'priceId';
    const FIELD_STAGED = 'staged';
    const FIELD_TYPE = 'type';
    const FIELD_FIELDS = 'fields';

    /**
     *
     * @return string|null
     */
    public function getPriceId();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    
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
    public function setPriceId(?string $priceId): void;
    
    public function setStaged(?bool $staged): void;
    
    public function setType(?TypeResourceIdentifier $type): void;
    
    public function setFields(?FieldContainer $fields): void;
}