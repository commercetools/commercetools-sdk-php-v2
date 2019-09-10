<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;

interface MyLineItemDraft extends JsonObject
{
    
    const FIELD_PRODUCT_ID = 'productId';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    const FIELD_CUSTOM = 'custom';
    const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     *
     * @return string|null
     */
    public function getProductId();
    
    /**
     *
     * @return int|null
     */
    public function getVariantId();
    
    /**
     *
     * @return int|null
     */
    public function getQuantity();
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    public function getSupplyChannel();
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    public function getDistributionChannel();
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    public function getCustom();
    
    /**
     *
     * @return ItemShippingDetailsDraft|null
     */
    public function getShippingDetails();
    public function setProductId(?string $productId): void;
    
    public function setVariantId(?int $variantId): void;
    
    public function setQuantity(?int $quantity): void;
    
    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;
    
    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void;
    
    public function setCustom(?CustomFieldsDraft $custom): void;
    
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;
}