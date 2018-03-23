<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

interface CategorySetAssetKeyAction extends CategoryUpdateAction {
    const FIELD_ASSET_ID = 'assetId';
    const FIELD_ASSET_KEY = 'assetKey';

    /**
     * @return string
     */
    public function getAssetId();

    /**
     * @return string
     */
    public function getAssetKey();

    /**
     * @param string $assetId
     * @return $this
     */
    public function setAssetId(string $assetId);

    /**
     * @param string $assetKey
     * @return $this
     */
    public function setAssetKey(string $assetKey);

}
