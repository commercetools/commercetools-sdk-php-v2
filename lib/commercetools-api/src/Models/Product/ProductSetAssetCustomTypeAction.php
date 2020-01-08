<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Base\JsonObject;

interface ProductSetAssetCustomTypeAction extends ProductUpdateAction
{
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_SKU = 'sku';
    const FIELD_STAGED = 'staged';
    const FIELD_ASSET_ID = 'assetId';
    const FIELD_ASSET_KEY = 'assetKey';
    const FIELD_TYPE = 'type';
    const FIELD_FIELDS = 'fields';

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|bool
     */
    public function getStaged();

    /**
     * @return null|string
     */
    public function getAssetId();

    /**
     * @return null|string
     */
    public function getAssetKey();

    /**
     * <p>If set, the custom type is set to this new value.
     * If absent, the custom type and any existing custom fields are removed.</p>.
     *
     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * <p>If set, the custom fields are set to this new value.</p>.
     *
     * @return null|JsonObject
     */
    public function getFields();

    public function setVariantId(?int $variantId): void;

    public function setSku(?string $sku): void;

    public function setStaged(?bool $staged): void;

    public function setAssetId(?string $assetId): void;

    public function setAssetKey(?string $assetKey): void;

    public function setType(?TypeResourceIdentifier $type): void;

    public function setFields(?JsonObject $fields): void;
}
