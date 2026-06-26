<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Common\AssetDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantAddAssetAction extends VariantUpdateAction
{
    public const FIELD_STAGED = 'staged';
    public const FIELD_ASSET = 'asset';
    public const FIELD_POSITION = 'position';

    /**
     * <p>If <code>true</code>, only the staged <code>assets</code> are updated. If <code>false</code>, both the current and staged <code>assets</code> are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>Value to append.</p>
     *

     * @return null|AssetDraft
     */
    public function getAsset();

    /**
     * <p>Position in <code>assets</code> where the Asset should be put. When specified, the value must be between <code>0</code> and the total number of Assets minus <code>1</code>.</p>
     *

     * @return null|int
     */
    public function getPosition();

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?AssetDraft $asset
     */
    public function setAsset(?AssetDraft $asset): void;

    /**
     * @param ?int $position
     */
    public function setPosition(?int $position): void;
}
