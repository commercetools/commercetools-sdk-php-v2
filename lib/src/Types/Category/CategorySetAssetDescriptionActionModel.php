<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Category\CategoryUpdateActionModel;

use Commercetools\Types\Common\LocalizedString;

class CategorySetAssetDescriptionActionModel extends CategoryUpdateActionModel implements CategorySetAssetDescriptionAction
{
    const DISCRIMINATOR_VALUE = 'setAssetDescription';

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
    protected $description;

    /**
     * @return string
     */
    public function getAssetKey()
    {
        if (is_null($this->assetKey)) {
            $value = $this->raw(CategorySetAssetDescriptionAction::FIELD_ASSET_KEY);
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
            $value = $this->raw(CategorySetAssetDescriptionAction::FIELD_ASSET_ID);
            $value = (string)$value;
            $this->assetId = $value;
        }
        return $this->assetId;
    }
    /**
     * @return LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(CategorySetAssetDescriptionAction::FIELD_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->description = $value;
        }
        return $this->description;
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
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

}
