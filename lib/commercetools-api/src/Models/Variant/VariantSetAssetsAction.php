<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantSetAssetsAction extends VariantUpdateAction
{
    public const FIELD_ASSETS = 'assets';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>Assets to set for the Variant.</p>
     *

     * @return null|AssetDraftCollection
     */
    public function getAssets();

    /**
     * <p>Whether only the staged assets are set. If <code>false</code>, both the current and staged assets are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?AssetDraftCollection $assets
     */
    public function setAssets(?AssetDraftCollection $assets): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
