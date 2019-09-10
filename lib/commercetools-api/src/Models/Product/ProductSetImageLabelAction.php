<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

interface ProductSetImageLabelAction extends ProductUpdateAction
{
    const FIELD_SKU = 'sku';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_IMAGE_URL = 'imageUrl';
    const FIELD_LABEL = 'label';
    const FIELD_STAGED = 'staged';

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @return null|string
     */
    public function getImageUrl();

    /**
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
