<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;

interface CategorySetAssetCustomTypeAction extends CategoryUpdateAction
{

    public const FIELD_ASSET_ID = 'assetId';
    public const FIELD_ASSET_KEY = 'assetKey';
    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

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
     * If absent, the custom type and any existing custom fields are removed.</p>
     *
     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * <p>If set, the custom fields are set to this new value.</p>
     *
     * @return null|JsonObject
     */
    public function getFields();

    public function setAssetId(?string $assetId): void;

    public function setAssetKey(?string $assetKey): void;

    public function setType(?TypeResourceIdentifier $type): void;

    public function setFields(?JsonObject $fields): void;
}
