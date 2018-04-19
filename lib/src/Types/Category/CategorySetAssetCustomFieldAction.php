<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

interface CategorySetAssetCustomFieldAction extends CategoryUpdateAction
{
    const FIELD_ASSET_KEY = 'assetKey';
    const FIELD_ASSET_ID = 'assetId';
    const FIELD_NAME = 'name';
    const FIELD_VALUE = 'value';

    /**
     * @return string
     */
    public function getAssetKey();

    /**
     * @return string
     */
    public function getAssetId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getValue();

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
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValue($value);

}
