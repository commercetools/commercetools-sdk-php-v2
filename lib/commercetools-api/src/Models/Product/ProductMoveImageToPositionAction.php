<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

interface ProductMoveImageToPositionAction extends ProductUpdateAction
{
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_SKU = 'sku';
    const FIELD_IMAGE_URL = 'imageUrl';
    const FIELD_POSITION = 'position';
    const FIELD_STAGED = 'staged';

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|string
     */
    public function getImageUrl();

    /**
     * @return null|int
     */
    public function getPosition();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setVariantId(?int $variantId): void;

    public function setSku(?string $sku): void;

    public function setImageUrl(?string $imageUrl): void;

    public function setPosition(?int $position): void;

    public function setStaged(?bool $staged): void;
}
