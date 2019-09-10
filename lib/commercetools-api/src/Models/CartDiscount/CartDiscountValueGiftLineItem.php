<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Product\ProductReference;

interface CartDiscountValueGiftLineItem extends CartDiscountValue
{
    
    const FIELD_PRODUCT = 'product';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';

    /**
     *
     * @return ProductReference|null
     */
    public function getProduct();
    
    /**
     *
     * @return int|null
     */
    public function getVariantId();
    
    /**
     *
     * @return ChannelReference|null
     */
    public function getSupplyChannel();
    
    /**
     *
     * @return ChannelReference|null
     */
    public function getDistributionChannel();
    public function setProduct(?ProductReference $product): void;
    
    public function setVariantId(?int $variantId): void;
    
    public function setSupplyChannel(?ChannelReference $supplyChannel): void;
    
    public function setDistributionChannel(?ChannelReference $distributionChannel): void;
}