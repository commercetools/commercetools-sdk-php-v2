<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\LocalizedString;

interface CategorySetAssetDescriptionAction extends CategoryUpdateAction
{

    public const FIELD_ASSET_ID = 'assetId';
    public const FIELD_ASSET_KEY = 'assetKey';
    public const FIELD_DESCRIPTION = 'description';

    /**
     * @return null|string
     */
    public function getAssetId();

    /**
     * @return null|string
     */
    public function getAssetKey();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    public function setAssetId(?string $assetId): void;

    public function setAssetKey(?string $assetKey): void;

    public function setDescription(?LocalizedString $description): void;
}
