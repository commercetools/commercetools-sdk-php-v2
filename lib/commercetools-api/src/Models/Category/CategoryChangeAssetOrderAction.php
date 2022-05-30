<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CategoryChangeAssetOrderAction extends CategoryUpdateAction
{
    public const FIELD_ASSET_ORDER = 'assetOrder';

    /**
     * <p>New value to set. Must contain all Asset <code>id</code>s.</p>
     *
     * @return null|array
     */
    public function getAssetOrder();

    /**
     * @param ?array $assetOrder
     */
    public function setAssetOrder(?array $assetOrder): void;
}
