<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Type\TypeReference;

interface CategorySetAssetCustomTypeAction extends CategoryUpdateAction {
    const FIELD_ASSET_KEY = 'assetKey';
    const FIELD_ASSET_ID = 'assetId';
    const FIELD_TYPE = 'type';
    const FIELD_FIELDS = 'fields';

    /**
     * @return string
     */
    public function getAssetKey();

    /**
     * @return string
     */
    public function getAssetId();

    /**
     * @return TypeReference
     */
    public function getType();

    /**
     * @return object
     */
    public function getFields();

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
     * @param TypeReference $type
     * @return $this
     */
    public function setType(TypeReference $type);

    /**
     * @param object $fields
     * @return $this
     */
    public function setFields($fields);

}
