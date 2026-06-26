<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantRemoveAssetAction extends VariantUpdateAction
{
    public const FIELD_STAGED = 'staged';
    public const FIELD_ASSET_ID = 'assetId';
    public const FIELD_ASSET_KEY = 'assetKey';

    /**
     * <p>If <code>true</code>, only the staged Asset is removed. If <code>false</code>, both the current and staged Asset is removed.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>The <code>id</code> of the Asset to remove.</p>
     *

     * @return null|string
     */
    public function getAssetId();

    /**
     * <p>The <code>key</code> of the Asset to remove.</p>
     *

     * @return null|string
     */
    public function getAssetKey();

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
}
