<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface CategorySetAssetDescriptionAction extends CategoryUpdateAction
{
    
    const FIELD_ASSET_ID = 'assetId';
    const FIELD_ASSET_KEY = 'assetKey';
    const FIELD_DESCRIPTION = 'description';

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
     * @return LocalizedString|null
     */
    public function getDescription();
    public function setAssetId(?string $assetId): void;
    
    public function setAssetKey(?string $assetKey): void;
    
    public function setDescription(?LocalizedString $description): void;
}