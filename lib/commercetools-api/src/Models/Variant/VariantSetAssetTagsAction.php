<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantSetAssetTagsAction extends VariantUpdateAction
{
    public const FIELD_STAGED = 'staged';
    public const FIELD_ASSET_ID = 'assetId';
    public const FIELD_ASSET_KEY = 'assetKey';
    public const FIELD_TAGS = 'tags';

    /**
     * <p>If <code>true</code>, only the staged Asset is updated. If <code>false</code>, both the current and staged Asset is updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>The <code>id</code> of the Asset to update.</p>
     *

     * @return null|string
     */
    public function getAssetId();

    /**
     * <p>The <code>key</code> of the Asset to update.</p>
     *

     * @return null|string
     */
    public function getAssetKey();

    /**
     * <p>Keywords for categorizing and organizing Assets.</p>
     *

     * @return null|array
     */
    public function getTags();

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?string $assetId
     */
    public function setAssetId(?string $assetId): void;

    /**
     * @param ?string $assetKey
     */
    public function setAssetKey(?string $assetKey): void;

    /**
     * @param ?array $tags
     */
    public function setTags(?array $tags): void;
}
