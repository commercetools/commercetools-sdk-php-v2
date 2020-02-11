<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSetImageLabelAction extends ProductUpdateAction
{
    public const FIELD_SKU = 'sku';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_IMAGE_URL = 'imageUrl';
    public const FIELD_LABEL = 'label';
    public const FIELD_STAGED = 'staged';

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>The URL of the image.</p>
     *
     * @return null|string
     */
    public function getImageUrl();

    /**
     * <p>The new image label.
     * If left blank or set to null, the label is removed.</p>
     *
     * @return null|string
     */
    public function getLabel();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setSku(?string $sku): void;

    public function setVariantId(?int $variantId): void;

    public function setImageUrl(?string $imageUrl): void;

    public function setLabel(?string $label): void;

    public function setStaged(?bool $staged): void;
}
