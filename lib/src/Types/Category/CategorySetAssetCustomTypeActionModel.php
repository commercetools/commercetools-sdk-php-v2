<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Category\CategoryUpdateActionModel;

use Commercetools\Types\Type\TypeReference;

class CategorySetAssetCustomTypeActionModel extends CategoryUpdateActionModel implements CategorySetAssetCustomTypeAction
{
    const DISCRIMINATOR_VALUE = 'setAssetCustomType';

    /**
     * @var string
     */
    protected $assetKey;
    /**
     * @var string
     */
    protected $assetId;
    /**
     * @var TypeReference
     */
    protected $type;
    /**
     * @var object
     */
    protected $fields;

    /**
     * @return string
     */
    public function getAssetKey()
    {
        if (is_null($this->assetKey)) {
            $value = $this->raw(CategorySetAssetCustomTypeAction::FIELD_ASSET_KEY);
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
            $value = $this->raw(CategorySetAssetCustomTypeAction::FIELD_ASSET_ID);
            $value = (string)$value;
            $this->assetId = $value;
        }
        return $this->assetId;
    }
    /**
     * @return TypeReference
     */
    public function getType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(CategorySetAssetCustomTypeAction::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(TypeReference::class, null);
            }
            $value = $this->mapData(TypeReference::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }
    /**
     * @return object
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            $value = $this->raw(CategorySetAssetCustomTypeAction::FIELD_FIELDS);
            $this->fields = $value;
        }
        return $this->fields;
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
     * @param TypeReference $type
     * @return $this
     */
    public function setType(TypeReference $type)
    {
        $this->type = $type;

        return $this;
    }
    /**
     * @param $fields
     * @return $this
     */
    public function setFields($fields)
    {
        $this->fields = $fields;

        return $this;
    }

}
