<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Types\Product\ProductReference;

interface CartDiscountValueGiftLineItem extends CartDiscountValue {
    const FIELD_PRODUCT = 'product';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';

    /**
     * @return ProductReference
     */
    public function getProduct();

    /**
     * @return int
     */
    public function getVariantId();

    /**
     * @return ChannelReference
     */
    public function getSupplyChannel();

    /**
     * @return ChannelReference
     */
    public function getDistributionChannel();

    /**
     * @param ProductReference $product
     * @return $this
     */
    public function setProduct(ProductReference $product);

    /**
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId);

    /**
     * @param ChannelReference $supplyChannel
     * @return $this
     */
    public function setSupplyChannel(ChannelReference $supplyChannel);

    /**
     * @param ChannelReference $distributionChannel
     * @return $this
     */
    public function setDistributionChannel(ChannelReference $distributionChannel);

}
