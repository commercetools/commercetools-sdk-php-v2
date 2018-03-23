<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Common\LocalizedString;

interface CategorySetAssetDescriptionAction extends CategoryUpdateAction {
    const FIELD_ASSET_KEY = 'assetKey';
    const FIELD_ASSET_ID = 'assetId';
    const FIELD_DESCRIPTION = 'description';

    /**
     * @return string
     */
    public function getAssetKey();

    /**
     * @return string
     */
    public function getAssetId();

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @param string $assetKey
     * @return $this
     */
    public function setAssetKey(string $assetKey);

    /**
     * @param string $assetId
     * @return $this
     */
    public function setAssetId(string $assetId);

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

}
