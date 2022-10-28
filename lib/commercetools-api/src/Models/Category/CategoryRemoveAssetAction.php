<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CategoryRemoveAssetAction extends CategoryUpdateAction
{
    public const FIELD_ASSET_ID = 'assetId';
    public const FIELD_ASSET_KEY = 'assetKey';

    /**
     * <p>Value to remove. Either <code>assetId</code> or <code>assetKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getAssetId();

    /**
     * <p>Value to remove. Either <code>assetId</code> or <code>assetKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getAssetKey();

    /**
     * @param ?string $assetId
     */
    public function setAssetId(?string $assetId): void;

    /**
     * @param ?string $assetKey
     */
    public function setAssetKey(?string $assetKey): void;
}
