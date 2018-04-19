<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

interface ProductSetProductVariantKeyAction extends ProductUpdateAction
{
    const FIELD_KEY = 'key';
    const FIELD_SKU = 'sku';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_STAGED = 'staged';

    /**
     * @return string
     */
    public function getKey();

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
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

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
