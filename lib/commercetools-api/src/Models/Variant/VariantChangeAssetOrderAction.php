<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantChangeAssetOrderAction extends VariantUpdateAction
{
    public const FIELD_STAGED = 'staged';
    public const FIELD_ASSET_ORDER = 'assetOrder';

    /**
     * <p>Whether only the staged <code>assets</code> is updated. If <code>false</code>, both the current and staged <code>assets</code> are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>All existing Asset <code>id</code>s of the Variant in the desired new order.</p>
     *

     * @return null|array
     */
    public function getAssetOrder();

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?array $assetOrder
     */
    public function setAssetOrder(?array $assetOrder): void;
}
