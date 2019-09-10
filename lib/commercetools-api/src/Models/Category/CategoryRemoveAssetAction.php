<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;

interface CategoryRemoveAssetAction extends CategoryUpdateAction
{
    
    const FIELD_ASSET_ID = 'assetId';
    const FIELD_ASSET_KEY = 'assetKey';

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
    public function setAssetId(?string $assetId): void;
    
    public function setAssetKey(?string $assetKey): void;
}