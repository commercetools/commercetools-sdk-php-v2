<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

interface ProductMoveImageToPositionAction extends ProductUpdateAction
{
    const FIELD_IMAGE_URL = 'imageUrl';
    const FIELD_POSITION = 'position';
    const FIELD_SKU = 'sku';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_STAGED = 'staged';

    /**
     * @return string
     */
    public function getImageUrl();

    /**
     * @return int
     */
    public function getPosition();

    /**
     * @return string
     */
    public function getSku();

    /**
     * @return int
     */
    public function getVariantId();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param string $imageUrl
     * @return $this
     */
    public function setImageUrl(string $imageUrl);

    /**
     * @param int $position
     * @return $this
     */
    public function setPosition(int $position);

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku);

    /**
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

}
