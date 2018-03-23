<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

interface ProductSetAttributeAction extends ProductUpdateAction {
    const FIELD_NAME = 'name';
    const FIELD_SKU = 'sku';
    const FIELD_VALUE = 'value';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_STAGED = 'staged';

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getSku();

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @return int
     */
    public function getVariantId();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku);

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValue($value);

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
