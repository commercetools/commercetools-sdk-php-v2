<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\AssetDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CategoryAddAssetAction extends CategoryUpdateAction
{
    public const FIELD_ASSET = 'asset';
    public const FIELD_POSITION = 'position';

    /**
     * <p>Value to append.</p>
     *
     * @return null|AssetDraft
     */
    public function getAsset();

    /**
     * <p>Position in the array at which the Asset should be put. When specified, the value must be between <code>0</code> and the total number of Assets minus <code>1</code>.</p>
     *
     * @return null|int
     */
    public function getPosition();

    /**
     * @param ?AssetDraft $asset
     */
    public function setAsset(?AssetDraft $asset): void;

    /**
     * @param ?int $position
     */
    public function setPosition(?int $position): void;
}
