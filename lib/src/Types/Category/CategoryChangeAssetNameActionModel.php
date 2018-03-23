<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionModel;

use Commercetools\Types\Common\LocalizedString;

class CategoryChangeAssetNameActionModel extends CategoryUpdateActionModel implements CategoryChangeAssetNameAction {
    const DISCRIMINATOR_VALUE = 'changeAssetName';

    /**
     * @var string
     */
    protected $assetKey;
    /**
     * @var string
     */
    protected $assetId;
    /**
     * @var LocalizedString
     */
    protected $name;

    /**
     * @return string
     */
    public function getAssetKey()
    {
        if (is_null($this->assetKey)) {
            $value = $this->raw(CategoryChangeAssetNameAction::FIELD_ASSET_KEY);
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
            $value = $this->raw(CategoryChangeAssetNameAction::FIELD_ASSET_ID);
            $value = (string)$value;
            $this->assetId = $value;
        }
        return $this->assetId;
    }
    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(CategoryChangeAssetNameAction::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
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
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

}
