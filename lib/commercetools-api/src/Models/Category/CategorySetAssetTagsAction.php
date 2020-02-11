<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CategorySetAssetTagsAction extends CategoryUpdateAction
{

    public const FIELD_ASSET_ID = 'assetId';
    public const FIELD_ASSET_KEY = 'assetKey';
    public const FIELD_TAGS = 'tags';

    /**
     * @return null|string
     */
    public function getAssetId();

    /**
     * @return null|string
     */
    public function getAssetKey();

    /**
     * @return null|array
     */
    public function getTags();

    public function setAssetId(?string $assetId): void;

    public function setAssetKey(?string $assetKey): void;

    public function setTags(?array $tags): void;
}
