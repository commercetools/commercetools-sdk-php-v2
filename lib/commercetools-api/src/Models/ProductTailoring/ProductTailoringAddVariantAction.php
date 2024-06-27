<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTailoringAddVariantAction extends ProductTailoringUpdateAction
{
    public const FIELD_ID = 'id';
    public const FIELD_SKU = 'sku';
    public const FIELD_IMAGES = 'images';
    public const FIELD_ASSETS = 'assets';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The <code>id</code> of the tailored ProductVariant to update.</p>
     *

     * @return null|int
     */
    public function getId();

    /**
     * <p>The <code>sku</code> of the tailored ProductVariant to update.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Images for the Product Variant Tailoring.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * <p>Media assets for the Product Variant Tailoring.</p>
     *

     * @return null|AssetDraftCollection
     */
    public function getAssets();

    /**
     * <p>If <code>true</code> the new Product Variant Tailoring is only staged. If <code>false</code> the new Product Variant Tailoring is both current and staged.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?int $id
     */
    public function setId(?int $id): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;

    /**
     * @param ?AssetDraftCollection $assets
     */
    public function setAssets(?AssetDraftCollection $assets): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
