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
     * <p>The <code>sku</code> of the ProductVariant to update.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>The <code>id</code> of the ProductVariant to update.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>The URL of the image to set the label.</p>
     *

     * @return null|string
     */
    public function getImageUrl();

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getLabel();

    /**
     * <p>If <code>true</code>, only the staged image is updated. If <code>false</code>, both the current and staged image is updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?string $imageUrl
     */
    public function setImageUrl(?string $imageUrl): void;

    /**
     * @param ?string $label
     */
    public function setLabel(?string $label): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
