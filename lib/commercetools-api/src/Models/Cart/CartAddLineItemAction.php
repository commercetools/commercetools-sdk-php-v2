<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Type\CustomFieldsDraft;

interface CartAddLineItemAction extends CartUpdateAction
{
    
    const FIELD_CUSTOM = 'custom';
    const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    const FIELD_PRODUCT_ID = 'productId';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_SKU = 'sku';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    const FIELD_EXTERNAL_PRICE = 'externalPrice';
    const FIELD_EXTERNAL_TOTAL_PRICE = 'externalTotalPrice';
    const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     *
     * @return CustomFieldsDraft|null
     */
    public function getCustom();
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    public function getDistributionChannel();
    
    /**
     *
     * @return ExternalTaxRateDraft|null
     */
    public function getExternalTaxRate();
    
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
     * @return string|null
     */
    public function getSku();
    
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
     * @return Money|null
     */
    public function getExternalPrice();
    
    /**
     *
     * @return ExternalLineItemTotalPrice|null
     */
    public function getExternalTotalPrice();
    
    /**
     *
     * @return ItemShippingDetailsDraft|null
     */
    public function getShippingDetails();
    public function setCustom(?CustomFieldsDraft $custom): void;
    
    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void;
    
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;
    
    public function setProductId(?string $productId): void;
    
    public function setVariantId(?int $variantId): void;
    
    public function setSku(?string $sku): void;
    
    public function setQuantity(?int $quantity): void;
    
    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;
    
    public function setExternalPrice(?Money $externalPrice): void;
    
    public function setExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice): void;
    
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;
}