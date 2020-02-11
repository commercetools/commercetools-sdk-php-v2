<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductRemoveImageAction extends ProductUpdateAction
{

    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_IMAGE_URL = 'imageUrl';
    public const FIELD_STAGED = 'staged';

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * <p>The URL of the image.</p>
     *
     * @return null|string
     */
    public function getImageUrl();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setVariantId(?int $variantId): void;

    public function setSku(?string $sku): void;

    public function setImageUrl(?string $imageUrl): void;

    public function setStaged(?bool $staged): void;
}
