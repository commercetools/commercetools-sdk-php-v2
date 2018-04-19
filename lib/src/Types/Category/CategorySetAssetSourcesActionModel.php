<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Category\CategoryUpdateActionModel;

use Commercetools\Types\Common\AssetSource;
use Commercetools\Types\Common\AssetSourceCollection;

class CategorySetAssetSourcesActionModel extends CategoryUpdateActionModel implements CategorySetAssetSourcesAction
{
    const DISCRIMINATOR_VALUE = 'setAssetSources';

    /**
     * @var string
     */
    protected $assetKey;
    /**
     * @var string
     */
    protected $assetId;
    /**
     * @var AssetSourceCollection
     */
    protected $sources;

    /**
     * @return string
     */
    public function getAssetKey()
    {
        if (is_null($this->assetKey)) {
            $value = $this->raw(CategorySetAssetSourcesAction::FIELD_ASSET_KEY);
            $value = (string)$value;
            $this->assetKey = $value;
        }
        return $this->assetKey;
    }
    /**
     * @return string
     */
    public function getAssetId()
    {
        if (is_null($this->assetId)) {
            $value = $this->raw(CategorySetAssetSourcesAction::FIELD_ASSET_ID);
            $value = (string)$value;
            $this->assetId = $value;
        }
        return $this->assetId;
    }
    /**
     * @return AssetSourceCollection
     */
    public function getSources()
    {
        if (is_null($this->sources)) {
            $value = $this->raw(CategorySetAssetSourcesAction::FIELD_SOURCES);
            if (is_null($value)) {
                return $this->mapData(AssetSourceCollection::class, null);
            }
            $value = $this->mapData(AssetSourceCollection::class, $value);
            $this->sources = $value;
        }
        return $this->sources;
    }

    /**
     * @param string $assetKey
     * @return $this
     */
    public function setAssetKey(string $assetKey)
    {
        $this->assetKey = (string)$assetKey;

        return $this;
    }
    /**
     * @param string $assetId
     * @return $this
     */
    public function setAssetId(string $assetId)
    {
        $this->assetId = (string)$assetId;

        return $this;
    }
    /**
     * @param AssetSourceCollection $sources
     * @return $this
     */
    public function setSources(AssetSourceCollection $sources)
    {
        $this->sources = $sources;

        return $this;
    }

}
