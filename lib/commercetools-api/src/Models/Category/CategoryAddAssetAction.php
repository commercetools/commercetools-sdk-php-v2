<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\AssetDraft;

interface CategoryAddAssetAction extends CategoryUpdateAction
{
    
    const FIELD_ASSET = 'asset';
    const FIELD_POSITION = 'position';

    /**
     *
     * @return AssetDraft|null
     */
    public function getAsset();
    
    /**
     *
     * @return int|null
     */
    public function getPosition();
    public function setAsset(?AssetDraft $asset): void;
    
    public function setPosition(?int $position): void;
}