<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Category\CategoryUpdateActionModel;

use Commercetools\Types\Common\AssetDraft;

class CategoryAddAssetActionModel extends CategoryUpdateActionModel implements CategoryAddAssetAction
{
    const DISCRIMINATOR_VALUE = 'addAsset';

    /**
     * @var AssetDraft
     */
    protected $asset;
    /**
     * @var int
     */
    protected $position;

    /**
     * @return AssetDraft
     */
    public function getAsset()
    {
        if (is_null($this->asset)) {
            $value = $this->raw(CategoryAddAssetAction::FIELD_ASSET);
            if (is_null($value)) {
                return $this->mapData(AssetDraft::class, null);
            }
            $value = $this->mapData(AssetDraft::class, $value);

            $this->asset = $value;
        }
        return $this->asset;
    }
    /**
     * @return int
     */
    public function getPosition()
    {
        if (is_null($this->position)) {
            $value = $this->raw(CategoryAddAssetAction::FIELD_POSITION);
            $value = (int)$value;
            $this->position = $value;
        }
        return $this->position;
    }

    /**
     * @param AssetDraft $asset
     * @return $this
     */
    public function setAsset(AssetDraft $asset)
    {
        $this->asset = $asset;

        return $this;
    }
    /**
     * @param int $position
     * @return $this
     */
    public function setPosition(int $position)
    {
        $this->position = (int)$position;

        return $this;
    }

}
