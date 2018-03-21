<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Common\AssetDraft;

interface CategoryAddAssetAction extends CategoryUpdateAction {
    const FIELD_ASSET = 'asset';
    const FIELD_POSITION = 'position';

    /**
     * @return AssetDraft
     */
    public function getAsset();

    /**
     * @return int
     */
    public function getPosition();

    /**
     * @param AssetDraft $asset
     * @return $this
     */
    public function setAsset(AssetDraft $asset);

    /**
     * @param int $position
     * @return $this
     */
    public function setPosition(int $position);

}
