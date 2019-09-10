<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;

interface CategorySetAssetCustomTypeAction extends CategoryUpdateAction
{
    
    const FIELD_ASSET_ID = 'assetId';
    const FIELD_ASSET_KEY = 'assetKey';
    const FIELD_TYPE = 'type';
    const FIELD_FIELDS = 'fields';

    /**
     *
     * @return string|null
     */
    public function getAssetId();
    
    /**
     *
     * @return string|null
     */
    public function getAssetKey();
    
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
    public function setAssetId(?string $assetId): void;
    
    public function setAssetKey(?string $assetKey): void;
    
    public function setType(?TypeResourceIdentifier $type): void;
    
    public function setFields(?JsonObject $fields): void;
}