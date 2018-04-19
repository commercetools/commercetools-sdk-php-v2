<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\PriceDraftCollection;
use Commercetools\Types\Common\PriceDraft;

interface ProductSetPricesAction extends ProductUpdateAction
{
    const FIELD_PRICES = 'prices';
    const FIELD_SKU = 'sku';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_STAGED = 'staged';

    /**
     * @return PriceDraftCollection
     */
    public function getPrices();

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
     * @param PriceDraftCollection $prices
     * @return $this
     */
    public function setPrices(PriceDraftCollection $prices);

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
